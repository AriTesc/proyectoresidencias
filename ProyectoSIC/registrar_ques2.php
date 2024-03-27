<?php
include('conexion.php');

$n=@$_GET['n'];
$eid=@$_GET['eid'];
$ch=@$_GET['ch'];
for($i=1;$i<=$n;$i++){
    $qid=uniqid();
    $qns=$_POST['qns'.$i];
    $q3=mysqli_query($conexion,"INSERT INTO questions VALUES ('$eid','$qid','$qns','$ch','$i')");
    $oaid=uniqid();
    $obid=uniqid();
    $ocid=uniqid();
    $odid=uniqid();
    $a=$_POST[$i.'1'];
    $b=$_POST[$i.'2'];
    $c=$_POST[$i.'3'];
    $d=$_POST[$i.'4'];
    $qa=mysqli_query($conexion,"INSERT INTO options VALUES ('$qid','$a','$oaid')");
    $qb=mysqli_query($conexion,"INSERT INTO options VALUES ('$qid','$b','$obid')");
    $qc=mysqli_query($conexion,"INSERT INTO options VALUES ('$qid','$c','$ocid')");
    $qd=mysqli_query($conexion,"INSERT INTO options VALUES ('$qid','$d','$odid')");
    $e=$_POST['ans'.$i];
    switch($e){
        case 'a':
            $ansid=$oaid;
            break;
        case 'b':
            $ansid=$obid;
            break;
        case 'c':
            $ansid=$ocid;
            break;
        case 'd':
            $ansid=$odid;
            break;
        default:
        $ansid=$oaid;
    }
    $qans=mysqli_query($conexion,"INSERT INTO answer VALUES ('$qid','$ansid')");
}
header("location:admin_form.php");