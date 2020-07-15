<?php
// file headers.php
header('Cache-Control: no-cache,must-revalidate');
header('X-Clacks-Overhead: "GNU Terry Pratchett"');
header('X-XSS-Protection: 1;mode=block');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Expect-CT: enforce,max-age=2592000');
header('Content-Language: en');
header('Referrer-Policy: origin-when-cross-origin');
Header('Feature-Policy: geolocation=self; vibrate=none');
Header('Content-Security-Policy: script-src=self');
?>

