<?php 
include('connect.php');
$id=$_POST['id'];
$a = "DELETE FROM tb_sanpham where id='$id'";
$result = $conn->prepare($a);
$result->execute();
$conn=null;
echo "hello";
 ?>