<?php 
include('./connect.php');
session_start();
$id=$_POST['Id'];
$name=$_POST['Name'];
$mota=$_POST['mota'];
$anhmota=$_POST['anhmota'];
$noidung=$_POST['noidung'];
$anhnoidung=$_POST['anhnoidung'];
$ketthuc=$_POST['ketthuc'];
$anhketthuc=$_POST['anh_end'];
$gia=$_POST['giaban'];
echo "$id";
$a1="UPDATE tb_sanpham SET Name='$name',MoTa='$mota',AnhMoTa='$anhmota',NoiDung='$noidung',AnhNoiDung='$anhnoidung',KetThuc='$ketthuc',AnhKetThuc='$anhketthuc',Gia='$gia' WHERE Id = '$id'";
$result1 = $conn->prepare($a1);
$result1->execute();
$conn=null;
header('Location:./giaodienAdmin/CapnhatthongtinSP.php?idSanpham='.$id.'&status=true');
 ?>
 