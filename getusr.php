<?php
include "h.php";
$cookieexp = time()+3600*24*30*12;
$id = count(scandir("data/"))-1;
file_put_contents("data/".$id, "[]");
echo '{"'.$id.'":';
$hash = md5($id^time());
$s = $pdo->prepare("select * from usr where id=? limit 1");
$s->execute(array($id));
if (count($s->fetchAll(PDO::FETCH_ASSOC))!=0) die();
$s = $pdo->prepare("insert into usr (id, pw, lck) values (?, ?, '0')");
$s->execute(array($id, $hash));
setcookie("id", $id, $cookieexp);
setcookie("pw", $hash, $cookieexp);
echo '"'.$hash.'"}';
?>
