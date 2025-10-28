<?php

$currentDir = dirname(__FILE__);

$parentDir = dirname($currentDir);

include($parentDir . '/common/connection.php');

if ($argc < 2) {
    echo "Usage: php print_user.php <user_id>\n";
    exit(1);
}

$horas = $argv[1];
echo "La cantidad de horas son: " . $horas . "\n";

$sql = "UPDATE users SET status = 'inactive' WHERE status = 'active' AND TIMESTAMPDIFF(HOUR, last_login_datetime, NOW()) > $horas;";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);

?>



