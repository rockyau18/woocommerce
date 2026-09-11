<?php
declare(strict_types=1);
require __DIR__ . '/lib/auth.php';
photo_review_logout();
header('Location: login.php');
exit;
