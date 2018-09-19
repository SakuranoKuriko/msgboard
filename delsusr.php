<?php
include "h.php";
$s = $pdo->query("select * from opt where name='listlck' and value='0' limit 1");
if (count($s->fetchAll(PDO::FETCH_ASSOC))==0) die();
$id = $_COOKIE["id"];
$uid = $_GET["uid"];
$sid = $_GET["sid"];
$pw = $_COOKIE["pw"];
if ($id==""||$uid==""||$pw==""||$sid=="") die();
$s = $pdo->prepare("select * from usr where id=? and pw=? and lck='0' limit 1");
$s->execute(array($id, $pw));
if (count($s->fetchAll(PDO::FETCH_ASSOC))==0) die();
$pdo->exec("update opt set value='1' where name='listlck'");
$u = json_decode(file_get_contents("data/".$id));
$lst = (array)json_decode(file_get_contents("list"));
$m = $lst[$sid]->members;
$ui = -1;
for ($i = 0; $i<count($m); $i++){
  if ($m[$i]->sid==$uid)
    $ui = $i;
}
if ($ui!=-1){
  /*
  $ui = -1;
  for ($i = 0; $i<count($u); $i++)
    if ($u[$i]->sid==$uid)
      $ui = $i;
  if ($ui!=-1){
    array_splice($u, $ui, 1);
    file_put_contents("data/".$id, json_encode($u));
    echo 0;
  }
  else echo 0;
  //*/
  array_splice($lst[$sid]->members, $ui, 1);
  file_put_contents("list", json_encode($lst));
  echo 0;
}
$pdo->exec("update opt set value='0' where name='listlck'");
?>
