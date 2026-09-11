<?php
declare(strict_types=1);
require __DIR__ . '/lib/auth.php';

header('X-Robots-Tag: noindex, nofollow');
photo_review_require_auth();

$app = __DIR__ . '/generated/review.html';
if (!is_readable($app)) {
    http_response_code(500);
    header('Content-Type: text/plain; charset=utf-8');
    echo "review.html missing — run build_online_app.py then deploy.";
    exit;
}

$html = file_get_contents($app);
// Inject logout link if placeholder exists; otherwise prepend a tiny bar via replace of <body>
if (str_contains($html, '<!--PHOTO_REVIEW_LOGOUT-->')) {
    $html = str_replace(
        '<!--PHOTO_REVIEW_LOGOUT-->',
        '<a class="logout" href="logout.php">登出</a>',
        $html
    );
} elseif (preg_match('/<body[^>]*>/', $html, $m)) {
    $bar = '<div style="position:fixed;top:10px;right:12px;z-index:50"><a href="logout.php" style="color:#95d5b2;font:14px ui-sans-serif,system-ui">登出</a></div>';
    $html = preg_replace('/<body[^>]*>/', $m[0] . $bar, $html, 1);
}

header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-store');
echo $html;
