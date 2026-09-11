<?php
declare(strict_types=1);

function photo_review_config(): array
{
    $path = dirname(__DIR__) . '/config.php';
    if (!is_readable($path)) {
        http_response_code(500);
        header('Content-Type: text/plain; charset=utf-8');
        echo "Missing config.php — copy config.sample.php and set a password.";
        exit;
    }
    /** @var array $cfg */
    $cfg = require $path;
    return $cfg;
}

function photo_review_bootstrap_session(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }
    session_name('lumina_photo_review');
    session_set_cookie_params([
        'lifetime' => 60 * 60 * 24 * 14,
        'path' => '/photo-review/',
        'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'),
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

function photo_review_client_ip(): string
{
    return $_SERVER['REMOTE_ADDR'] ?? '';
}

function photo_review_is_authed(): bool
{
    photo_review_bootstrap_session();
    $cfg = photo_review_config();
    $ip = photo_review_client_ip();
    if (!empty($cfg['allow_ips']) && in_array($ip, (array) $cfg['allow_ips'], true)) {
        return true;
    }
    return !empty($_SESSION['photo_review_ok']);
}

function photo_review_require_auth(): void
{
    if (photo_review_is_authed()) {
        return;
    }
    $uri = $_SERVER['REQUEST_URI'] ?? '/photo-review/';
    if (str_contains($uri, '/api/')) {
        http_response_code(401);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => false, 'error' => 'unauthorized'], JSON_UNESCAPED_UNICODE);
        exit;
    }
    header('Location: login.php');
    exit;
}

function photo_review_attempt_login(string $password): bool
{
    photo_review_bootstrap_session();
    $cfg = photo_review_config();
    $expected = (string) ($cfg['password'] ?? '');
    if ($expected === '' || $expected === 'CHANGE_ME') {
        return false;
    }
    if (!hash_equals($expected, $password)) {
        return false;
    }
    session_regenerate_id(true);
    $_SESSION['photo_review_ok'] = true;
    $_SESSION['photo_review_at'] = time();
    return true;
}

function photo_review_logout(): void
{
    photo_review_bootstrap_session();
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $p = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'] ?? '', (bool) $p['secure'], (bool) $p['httponly']);
    }
    session_destroy();
}
