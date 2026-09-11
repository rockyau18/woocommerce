<?php
declare(strict_types=1);
require dirname(__DIR__) . '/lib/auth.php';

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
header('X-Robots-Tag: noindex, nofollow');

photo_review_require_auth();

$dataDir = dirname(__DIR__) . '/data';
$file = $dataDir . '/marks.json';

if (!is_dir($dataDir)) {
    mkdir($dataDir, 0755, true);
}

function photo_review_read_marks(string $file): array
{
    if (!is_readable($file)) {
        return ['candidates' => new stdClass(), 'site' => new stdClass()];
    }
    $raw = file_get_contents($file);
    $data = json_decode($raw ?: '{}', true);
    if (!is_array($data)) {
        $data = [];
    }
    return [
        'candidates' => isset($data['candidates']) && is_array($data['candidates']) ? $data['candidates'] : [],
        'site' => isset($data['site']) && is_array($data['site']) ? $data['site'] : [],
    ];
}

function photo_review_write_marks(string $file, array $marks): bool
{
    // Always JSON-encode marks buckets as objects, even when empty.
    $payload = json_encode(
        [
            'candidates' => (object) ($marks['candidates'] ?? []),
            'site' => (object) ($marks['site'] ?? []),
            'updated_at' => gmdate('c'),
        ],
        JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
    );
    $tmp = $file . '.tmp';
    if (file_put_contents($tmp, $payload . "\n", LOCK_EX) === false) {
        return false;
    }
    return rename($tmp, $file);
}

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($method === 'GET') {
    $marks = photo_review_read_marks($file);
    echo json_encode([
        'ok' => true,
        'marks' => [
            'candidates' => (object) ($marks['candidates'] ?? []),
            'site' => (object) ($marks['site'] ?? []),
        ],
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($method !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'method_not_allowed']);
    exit;
}

$body = json_decode(file_get_contents('php://input') ?: '{}', true);
if (!is_array($body)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'invalid_json']);
    exit;
}

$marks = photo_review_read_marks($file);
$which = (string) ($body['which'] ?? '');
if ($which !== 'candidates' && $which !== 'site') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'bad_which']);
    exit;
}

// Full replace for a tab
if (array_key_exists('replace', $body) && is_array($body['replace'])) {
    $clean = [];
    foreach ($body['replace'] as $id => $val) {
        if ($val === 'ok' || $val === 'bad') {
            $clean[(string) $id] = $val;
        }
    }
    $marks[$which] = $clean;
} else {
    $id = (string) ($body['id'] ?? '');
    if ($id === '') {
        http_response_code(400);
        echo json_encode(['ok' => false, 'error' => 'missing_id']);
        exit;
    }
    $value = $body['value'] ?? null;
    if ($value === null || $value === '' || $value === 'clear') {
        unset($marks[$which][$id]);
    } elseif ($value === 'ok' || $value === 'bad') {
        $marks[$which][$id] = $value;
    } else {
        http_response_code(400);
        echo json_encode(['ok' => false, 'error' => 'bad_value']);
        exit;
    }
}

if (!photo_review_write_marks($file, $marks)) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'write_failed']);
    exit;
}

echo json_encode([
    'ok' => true,
    'marks' => [
        'candidates' => (object) ($marks['candidates'] ?? []),
        'site' => (object) ($marks['site'] ?? []),
    ],
], JSON_UNESCAPED_UNICODE);
