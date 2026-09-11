<?php
declare(strict_types=1);
require __DIR__ . '/lib/auth.php';

photo_review_bootstrap_session();
if (photo_review_is_authed()) {
    header('Location: ./');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = (string) ($_POST['password'] ?? '');
    if (photo_review_attempt_login($password)) {
        header('Location: ./');
        exit;
    }
    $error = '密碼不正確，請再試一次。';
}
header('X-Robots-Tag: noindex, nofollow');
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <title>Lumina 相片審核 · 登入</title>
  <style>
    body{margin:0;min-height:100vh;display:grid;place-items:center;font-family:ui-sans-serif,system-ui,sans-serif;background:#0f1115;color:#f2f2f2}
    form{width:min(360px,92vw);background:#1a1d24;border:1px solid #2a2f3a;border-radius:14px;padding:28px 24px}
    h1{margin:0 0 8px;font-size:1.2rem}
    p{margin:0 0 18px;color:#9aa3b2;font-size:.9rem;line-height:1.45}
    label{display:block;font-size:.85rem;margin-bottom:6px}
    input{width:100%;box-sizing:border-box;padding:12px 12px;border-radius:10px;border:1px solid #2a2f3a;background:#12151c;color:#fff;font-size:1rem}
    button{width:100%;margin-top:14px;padding:12px;border:0;border-radius:10px;background:#2d6a4f;color:#fff;font-size:1rem;cursor:pointer}
    .err{color:#f4a4a4;font-size:.88rem;margin:0 0 12px}
  </style>
</head>
<body>
  <form method="post" autocomplete="current-password">
    <h1>Lumina 相片審核</h1>
    <p>請輸入共用密碼。此頁僅供內部審核，請勿外傳連結與密碼。</p>
    <?php if ($error): ?><p class="err"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
    <label for="password">共用密碼</label>
    <input id="password" name="password" type="password" required autofocus>
    <button type="submit">進入審核</button>
  </form>
</body>
</html>
