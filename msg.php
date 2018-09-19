<?php
include "h.php";
$s = $pdo->query("select * from opt where name='listlck' and value='0' limit 1");
if (count($s->fetchAll(PDO::FETCH_ASSOC))==0) die();
$sid = $_POST["sid"];
$msg = $_POST["msg"];
$id = $_COOKIE["id"];
$pw = $_COOKIE["pw"];
if ($sid==""||$msg==""||$id==""||$pw=="") die();
if ($msg=="sign_msg_none") $msg="";
$pdo->exec("update opt set value='1' where name='listlck'");
$lst = (array)json_decode(file_get_contents("list"));
if (array_key_exists($sid, $lst)){
  $s = $pdo->prepare("select * from usr where id=? and pw=? limit 1");
  $s->execute(array($id, $pw));
  $r = $s->fetchAll(PDO::FETCH_ASSOC);
  if (count($r)!=0&&($lst[$sid]->own->id==$id||$r[0]["name"]!="")){
    $lst[$sid]->msg = $msg;
    file_put_contents("list", json_encode($lst));
    echo 0;
  }
}
$pdo->exec("update opt set value='0' where name='listlck'");
?>
