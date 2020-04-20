<?php 
include('connect.php');
$idDMSP=$_POST['idDMSP'];
$a2 = "SELECT * FROM tb_sanpham where idDMSP='$idDMSP'";
$result2 = $conn->prepare($a2);
$result2->execute();
$result=array();
foreach ($result2 as $row) {
$result[]=array(
	'name'=>$row['Name'],
	'gia'=>$row['Gia'],
	'id'=>$row['Id']
);
}
echo json_encode($result);

 ?>