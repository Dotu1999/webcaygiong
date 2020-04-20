<?php 
if(isset($_GET['status'])&&$_GET['status']=="true"){
    echo "<script>alert('bạn đã cập nhật thông tin sản phẩm thành công')</script>";
}
 ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cập nhật thông tin Sản Phẩm</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="Admin.css">
	<script type="text/javascript" src="./jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./Admin.js"></script>
</head>
<body>
	<!-- phần tiêu đề  -->
	<div class="header">
		<center><h1>Trang Sửa thông tin Sản Phẩm</h1></center>
		<div style="display: flex;align-items: center;margin-top: 20px;">
			<p>Đỗ Quang Tú<p>
			<button type="button" class="btn btn-light">Logout</button>
		</div>
	</div>
	<!-- phần content -->
	<div class="content">
		<div class="nav">
			<ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="tab" href="./Admin.php">Home</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="./Admin.php">Quản Lý Danh mục sản phẩm và Sản Phẩm </a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="./Quanlbaiviet.php">Quản Lý Bài Viết</a>
				  </li>
				   <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="#menu2">Quản Lý Đơn Hàng</a>
				  </li>
			</ul>
		</div>
	<!-- phần điền thông tin -->
	<form class="thongtinsp" action="../Change_SP.php" method="POST">
	<?php  
	include('../connect.php');
	if(isset($_GET['idSanpham'])){
		$a=$_GET['idSanpham'];
	    $a2 = "SELECT * FROM tb_sanpham where Id='$a' ";
	    $result2 = $conn->prepare($a2);
	    $result2->execute();
	    foreach ($result2 as $row) {
			  echo'<h2>Tên Sản Phẩm:</h2><br>
			  <input type="hidden" name="Id" value="'.$row['Id'].'">
			  <input type="text" id="fname" name="Name" value="'.$row['Name'].'"><br>
			  <h2>Giá Bán:</h2><br>
			  <input type="text" id="lname" name="giaban" value="'.$row['Gia'].'"><br>
			  <h2>Mô tả sản phẩm:</h2><br>
			  <textarea name="mota" rows="10" cols="70">'.$row['MoTa'].'</textarea><br>
			  <h2>Link ảnh mô tả:</h2><br>
			  <input type="text" name="anhmota" value="'.$row['AnhMoTa'].'"><br>
			  <h2>Nội dung:</h2><br>
			  <textarea name="noidung" rows="10" cols="70" >'.$row['NoiDung'].'</textarea><br>
			  <h2>Link ảnh nội dung:</h2><br>
			  <input type="text" name="anhnoidung" value="'.$row['AnhNoiDung'].'"><br>
			  <h2>Phần kết thúc:</h2><br>
			  <textarea name="ketthuc" rows="10" cols="70" >'.$row['KetThuc'].'</textarea><br>
			  <h2>Link ảnh kết thúc :</h2><br>
			  <input type="text" name="anh_end" value="'.$row['AnhKetThuc'].'"><br>
			  <input type="submit" value="Cập Nhật Thông Tin Sản Phẩm" style="background-color: gray"><br>';}}
	 ?>
	</form>
	
</body>
</html>