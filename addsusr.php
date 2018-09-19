<?php
include "h.php";
$s = $pdo->query("select * from opt where name='listlck' and value='0' limit 1");
if (count($s->fetchAll(PDO::FETCH_ASSOC))==0) die();
$id = $_COOKIE["id"];
$name = $_GET["name"];
$sid = $_GET["sid"];
$pw = $_COOKIE["pw"];
if ($id==""||$name==""||$pw==""||$sid=="") die();
$s = $pdo->prepare("select * from usr where id=? and pw=? and lck='0' limit 1");
$s->execute(array($id, $pw));
if (count($s->fetchAll(PDO::FETCH_ASSOC))==0) die();
$pdo->exec("update opt set value='1' where name='listlck'");
$s = $pdo->query("select * from opt where name='susrn'");
$r = $s->fetchAll(PDO::FETCH_ASSOC)[0]["value"]+1;
$pdo->exec("update opt set value=$r where name='susrn'");
$r--;
$susr = new stdClass();
$susr->sid = $r;
$susr->name = $name;
$susr->id = $id;
/*
$u = json_decode(file_get_contents("data/".$id));
array_push($u, $susr);
file_put_contents("data/".$id, json_encode($u));
//*/
$lst = (array)json_decode(file_get_contents("list"));
if (array_key_exists($sid, $lst)&&count($lst[$sid]->members)+1<$lst[$sid]->max){
  array_push($lst[$sid]->members, $susr);
  file_put_contents("list", json_encode($lst));
  echo $r;
}
$pdo->exec("update opt set value='0' where name='listlck'");
?>
