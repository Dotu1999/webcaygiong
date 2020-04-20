<?php 
include('./connect.php');
	session_start();
	if(isset($_POST['email'])&&isset($_POST['password'])){
	$email=$_POST['email'];
	$password=$_POST['password'];}
	$a = "SELECT count(*) FROM tb_admin where email='$email'";
	$a1 = "SELECT * FROM tb_admin where email='$email'";
	$result = $conn->prepare($a);
	$result1 = $conn->prepare($a1);
	$result->execute();
	$result1->execute();
	$number_of_rows = $result->fetchColumn(); 
	echo $number_of_rows;
	$user = $result1->fetch(PDO::FETCH_ASSOC);
	$password_hash=$user['Password'];
	if($number_of_rows>0){
		if(password_verify($password,$password_hash)){
		//lưu thông tin id user vừa đăng nhập
		$_SESSION['iduser']=$user['Id'];
		$_SESSION['username']=$user['Name'];
		$_SESSION['email']=$user['Email'];
		header('Location:giaodienAdmin/Admin.php');
		}
		else{
			header('Location:Login.php?status=false');
		}
	} 
	else{
		header('Location:Login.php?status=false');
	}
	$conn=null;
 ?>