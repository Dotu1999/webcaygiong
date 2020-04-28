<?php 
include('./connect.php');
$name=$_POST['name'];
$a2 = "SELECT * FROM tb_sanpham where Name like '%$name%'";
$result2 = $conn->prepare($a2);
$result2->execute();
$result=array();
foreach ($result2 as $row) {
$result[]=array(
	'name'=>$row['Name'],
	'gia'=>$row['Gia'],
	'mota'=>$row['MoTa'],
	'anhmota'=>$row['AnhMoTa'],
	'Id'=>$row['Id']
);
}
echo json_encode($result);
 ?>