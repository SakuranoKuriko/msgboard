<?php
include "h.php";
$pdo->exec("update usr set lck='0'");
$pdo->exec("update opt set value='0' where name='listlck'");
?>
