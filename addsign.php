<?php
include "h.php";
$s = $pdo->query("select * from opt where name='listlck' and value='0' limit 1");
if (count($s->fetchAll(PDO::FETCH_ASSOC))==0) die();
$pdo->exec("update opt set value='1' where name='listlck'");
$ti = $_POST["ti"];
$msg = $_POST["msg"];
$max = $_POST["max"];
$owni = $_COOKIE["id"];
$ownn = $_POST["own"];
if ($ti==""||$max==""||$owni==""||$ownn=="") die();
$lst = json_decode(file_get_contents("list"));
$s = $pdo->query("select * from opt where name='sidn' limit 1");
$sid = $s->fetchAll(PDO::FETCH_ASSOC)[0]["value"]+1;
$pdo->exec("update opt set value=$sid where name='sidn'");
$sid = "s".($sid-1);
$newsign = new stdClass();
$newsign->id = $sid;
$newsign->ti = $ti;
$newsign->msg = $msg;
$newsign->max = $max;
$newsign->own = new stdClass();
$newsign->own->id = $owni;
$newsign->own->name = $ownn;
$newsign->members = array();
$newsign->time = time();
$newsign->tic = "rgb(".mt_rand(0, 255).",".mt_rand(0, 255).",".mt_rand(0, 255).")";
$newsign->owc = "rgb(".mt_rand(0, 255).",".mt_rand(0, 255).",".mt_rand(0, 255).")";
$newsign->cu = new stdClass();
$newsign->cu->id = "";
$newsign->cu->name = "";
$newsign->cu->isin = "";
$lst = (array)$lst;
$lst[$sid]=$newsign;
file_put_contents("list", json_encode($lst));
$pdo->exec("update opt set value='0' where name='listlck'");
echo $sid;
?>
