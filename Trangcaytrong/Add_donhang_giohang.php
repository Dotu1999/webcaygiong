<?php 
include('./connect.php');
if(($_POST['name']!=null)&&($_POST['phone']!=null)&&($_POST['email']!=null)&&($_POST['address']!=null)&&($_POST['sanpham']!=null)){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$sanpham=$_POST['sanpham'];
$giohang=json_decode($sanpham,true);
// echo json_encode($giohang);
$a1 = "INSERT INTO tb_donhang(NameKH,Email,Phone,Address) VALUES('$name','$email','$phone','$address') ";
// $result1 = $conn->prepare($a1);
// $result1->execute();
$conn->exec($a1);
$last_id = $conn->lastInsertId();
// //
foreach ($giohang as $row) {
$idsp=$row['id'];
$iddh=$last_id;
$soluong=$row['soluong'];
$a2 = "INSERT INTO tb_sanpham_donhang(IdSanPham,IdDonHang,Soluong) VALUES('$idsp','$iddh','$soluong') ";
$result2 = $conn->prepare($a2);
$result2->execute();
}
echo "true";

$conn=null;
}
else{
	echo "false";
}
 ?>
