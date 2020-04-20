<?php 
include('./connect.php');
session_start();
$idDMSP=$_GET['idDMSP'];
$name=$_POST['Name'];
$mota=$_POST['mota'];
$anhmota=$_POST['anhmota'];
$noidung=$_POST['noidung'];
$anhnoidung=$_POST['anhnoidung'];
$ketthuc=$_POST['ketthuc'];
$anhketthuc=$_POST['anh_end'];
$gia=$_POST['giaban'];
//$idlist=$_POST['idlist'];
$a1 = "INSERT INTO tb_sanpham(Name,MoTa,AnhMoTa,NoiDung,AnhNoiDung,KetThuc,AnhKetThuc,Gia,IdDMSP) VALUES('$name','$mota','$anhmota','$noidung','$anhnoidung','$ketthuc','$anhketthuc','$gia','$idDMSP') ";
$result1 = $conn->prepare($a1);
$result1->execute();
$conn=null;
header('Location:./giaodienAdmin/ThongtinSP.php?idDMSP='.$idDMSP.'&status=true');
 ?>