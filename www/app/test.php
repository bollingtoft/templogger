<?php
$command = escapeshellcmd('python /var/www/test.py');
$output = shell_exec($command);
echo $output;

?>
