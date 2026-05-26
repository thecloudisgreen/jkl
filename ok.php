<?php
// This will show us where PHP-FPM is listening
exec('grep -r "listen =" /etc/php-fpm.d/ 2>/dev/null', $output);
echo "<pre>";
print_r($output);
echo "</pre>";
?>
