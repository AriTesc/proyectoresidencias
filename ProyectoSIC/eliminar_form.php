<?php
include("conexion.php");
$eid=@$_GET['eid'];
$result = mysqli_query($conexion,"SELECT * FROM questions WHERE eid='$eid' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
    $qid = $row['qid'];
    $r1 = mysqli_query($conexion,"DELETE FROM options WHERE qid='$qid'") or die('Error');
    $r2 = mysqli_query($conexion,"DELETE FROM answer WHERE qid='$qid' ") or die('Error');
}
$r3 = mysqli_query($conexion,"DELETE FROM questions WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($conexion,"DELETE FROM quiz WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($conexion,"DELETE FROM history WHERE eid='$eid' ") or die('Error');

header("location:admin_form.php");