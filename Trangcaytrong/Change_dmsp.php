<?php 
include('./connect.php');
$id=$_POST['id'];
$name=$_POST['name'];
$update="UPDATE tb_Danhmucsp SET Name='$name' where id='$id'";
$result_update=$conn->prepare($update);
$result_update->execute();
$conn=null;
echo $name;
 ?>