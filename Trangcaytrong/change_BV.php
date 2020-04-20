<?php 
include('./connect.php');
session_start();
if(($_POST['Name']!=null)&&($_POST['mota']!=null)&&($_POST['anhmota']!=null)&&($_POST['noidung']!=null)&&($_POST['anhnoidung']!=null)&&($_POST['ketthuc']!=null)&&($_POST['anh_end']!=null)&&($_POST['Id']!=null))
{
$id=$_POST['Id'];
$name=$_POST['Name'];
$mota=$_POST['mota'];
$anhmota=$_POST['anhmota'];
$noidung=$_POST['noidung'];
$anhnoidung=$_POST['anhnoidung'];
$ketthuc=$_POST['ketthuc'];
$anhketthuc=$_POST['anh_end'];
$status=$_POST['status'];
$a1="UPDATE tb_baiviet SET Title='$name',MoTa='$mota',AnhMoTa='$anhmota',NoiDung='$noidung',AnhNoiDung='$anhnoidung',KetThuc='$ketthuc',AnhKetThuc='$anhketthuc' ,Status='$status' WHERE Id = '$id'";
$result1 = $conn->prepare($a1);
$result1->execute();
$conn=null;
echo "hello";
}
 ?>