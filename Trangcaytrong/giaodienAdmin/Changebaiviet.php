<?php  
session_start();
if(!isset($_SESSION['iduser'])&&!isset($_SESSION['username'])){
    header('Location:../Login.php');
    exit();}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thông tin Sản Phẩm</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="Admin.css">
	<script type="text/javascript" src="./jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./Admin.js"></script>
</head>
<body>
	<!-- phần tiêu đề  -->
	<div class="header">
		<center><h1>Trang Sửa Bài Viết</h1></center>
		<div style="display: flex;align-items: center;margin-top: 20px;">
			<p><?php echo $_SESSION['username']; ?><p>
			<a href="../Logout.php"><button type="button" class="btn btn-light">Logout</button></a>
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
	<form class="thongtinsp">
	<?php 
	include('../connect.php');
	if(isset($_GET['idbv'])){
		$a=$_GET['idbv'];
	    $a2 = "SELECT * FROM tb_baiviet where Id='$a' ";
	    $result2 = $conn->prepare($a2);
	    $result2->execute();
	    foreach ($result2 as $row) {
	  echo'<h2>Tiêu Đề Bài Viết:</h2><br>
	  <input type="hidden" name="Id" value="'.$row['Id'].'">
	  <input type="text" id="fname" name="Name" value="'.$row['Title'].'"><br>
	  <h2>Phần Mô tả:</h2><br>
	  <textarea name="mota" rows="10" cols="70" >'.$row['MoTa'].'</textarea><br>
	  <h2>Link ảnh mô tả:</h2><br>
	  <input type="text" name="anhmota" value="'.$row['AnhMoTa'].'"><br>
	  <h2>Nội dung bài Viết:</h2><br>
	  <textarea name="noidung" rows="10" cols="70" >'.$row['NoiDung'].'</textarea><br>
	  <h2>Link ảnh nội dung:</h2><br>
	  <input type="text" name="anhnoidung" value="'.$row['AnhNoiDung'].'"><br>
	  <h2>Phần kết thúc bài viết:</h2><br>
	  <textarea name="ketthuc" rows="10" cols="70" >'.$row['KetThuc'].'</textarea><br>
	  <h2>Link ảnh kết thúc :</h2><br>
	  <input type="text" name="anh_end"value="'.$row['AnhKetThuc'].'"><br>
	  <h2>Trạng thái :</h2><br>
	  <select id="cars" name="Status" value="'.$row['Status'].'">
		  <option value="1">Nổi Bật</option>
		  <option value="0">Bình thường</option>
	  </select><br>
	  <button id="changebv" type="button" class="btn btn-secondary">Change</button>';}}
	  ?>
	</form>
	
</body>
</html>