<?php 
include('./connect.php');
session_start();
$name=$_POST['name'];
$idadmin=$_SESSION['iduser'];
//$idlist=$_POST['idlist'];
$a1 = "INSERT INTO tb_danhmucsp(Name,IdAdmin) VALUES('$name','$idadmin') ";
$result1 = $conn->prepare($a1);
$result1->execute();
echo $name;
$conn=null;
 ?>