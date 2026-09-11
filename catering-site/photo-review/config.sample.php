<?php
/**
 * Copy to config.php and set a shared password.
 * config.php is gitignored — never commit the real password.
 */
return [
    // Shared password for colleagues (change after first deploy if needed)
    'password' => 'CHANGE_ME',

    // Optional: comma-separated IPs allowed without login (leave empty)
    'allow_ips' => [],
];
