<?php
include("conexion.php");
session_start();
$email=$_SESSION['Usuario'];
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$ans=$_POST['ans'];
$qid=@$_GET['qid'];
$q=mysqli_query($conexion,"SELECT * FROM answer WHERE qid='$qid' " );
while($row=mysqli_fetch_array($q) ){
  $ansid=$row['ansid'];
}
if($ans == $ansid){
  $q=mysqli_query($conexion,"SELECT * FROM quiz WHERE eid='$eid' " );
  while($row=mysqli_fetch_array($q) ){
    $sahi=$row['sahi'];
  }
  if($sn == 1){
    $q=mysqli_query($conexion,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW())")or die('Error');
  }
  $q=mysqli_query($conexion,"SELECT * FROM history WHERE eid='$eid' AND email='$email' ")or die('Error115');
  while($row=mysqli_fetch_array($q) ){
    $s=$row['score'];
    $r=$row['sahi'];
  }
  $r++;
  $s=$s+$sahi;
  $q=mysqli_query($conexion,"UPDATE `history` SET `score`=$s,`level`=$sn,`sahi`=$r, date= NOW()  WHERE  email = '$email' AND eid = '$eid'")or die('Error124');
}else{
  $q=mysqli_query($conexion,"SELECT * FROM quiz WHERE eid='$eid' " )or die('Error129');
  while($row=mysqli_fetch_array($q) ){
    $wrong=$row['wrong'];
  }
  if($sn == 1){
    $q=mysqli_query($conexion,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW() )")or die('Error137');
  }
  $q=mysqli_query($conexion,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error139');
  while($row=mysqli_fetch_array($q) ){
    $s=$row['score'];
    $w=$row['wrong'];
  }
  $w++;
  $s=$s-$wrong;
  $q=mysqli_query($conexion,"UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w, date=NOW() WHERE  email = '$email' AND eid = '$eid'")or die('Error147');
}
if($sn != $total){
  $sn++;
  header("location:responder_form.php?eid=$eid&n=$sn&t=$total")or die('Error152');
}else{
  header("location:responder_form.php?eid=$eid");
}
