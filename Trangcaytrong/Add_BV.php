<?php 
include('./connect.php');
session_start();
if(($_POST['Name']!=null)&&($_POST['mota']!=null)&&($_POST['anhmota']!=null)&&($_POST['noidung']!=null)&&($_POST['anhnoidung']!=null)&&($_POST['ketthuc']!=null)&&($_POST['anh_end']!=null)){
$idAdmin=$_SESSION['iduser'];
$name=$_POST['Name'];
$mota=$_POST['mota'];
$anhmota=$_POST['anhmota'];
$noidung=$_POST['noidung'];
$anhnoidung=$_POST['anhnoidung'];
$ketthuc=$_POST['ketthuc'];
$anhketthuc=$_POST['anh_end'];
$status=$_POST['status'];
//$idlist=$_POST['idlist'];
$a1 = "INSERT INTO tb_baiviet(Title,MoTa,AnhMoTa,NoiDung,AnhNoiDung,KetThuc,AnhKetThuc,Status,IdAdmin) VALUES('$name','$mota','$anhmota','$noidung','$anhnoidung','$ketthuc','$anhketthuc','$status','$idAdmin') ";
$result1 = $conn->prepare($a1);
$result1->execute();
$conn=null;
echo "hello";}
 ?>