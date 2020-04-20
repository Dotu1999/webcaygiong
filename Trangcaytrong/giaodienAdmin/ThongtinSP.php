<?php 
if(isset($_GET['status'])&&$_GET['status']=="true"){
    echo "<script>alert('bạn đã thêm sản phẩm thành công')</script>";
}
session_start();
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
		<center><h1>Trang Thêm Sản Phẩm</h1></center>
		<div style="display: flex;align-items: center;margin-top: 20px;">
			<p><?php echo $_SESSION['username']; ?><p>
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
	<?php echo'<form class="thongtinsp" action="../Add_SP.php?idDMSP='.$_GET['idDMSP'].'" method="POST">'?>
	  <h2>Tên Sản Phẩm:</h2><br>
	  <input type="text" id="fname" name="Name" required="" placeholder="Tên Sản Phẩm"><br>
	  <h2>Giá Bán:</h2><br>
	  <input type="text" id="lname" name="giaban" required="" placeholder="Điền Giá Bán"><br>
	  <h2>Mô tả sản phẩm:</h2><br>
	  <textarea name="mota" rows="10" cols="70" required="" placeholder="Mô tả sản Phẩm"></textarea><br>
	  <h2>Link ảnh mô tả:</h2><br>
	  <input type="text" name="anhmota" required="" placeholder="link ảnh"><br>
	  <h2>Nội dung:</h2><br>
	  <textarea name="noidung" rows="10" cols="70" required="" placeholder="Nội dung"></textarea><br>
	  <h2>Link ảnh nội dung:</h2><br>
	  <input type="text" name="anhnoidung" required="" placeholder="link ảnh"><br>
	  <h2>Phần kết thúc:</h2><br>
	  <textarea name="ketthuc" rows="10" cols="70" required="" placeholder="Phần kết thúc"></textarea><br>
	  <h2>Link ảnh kết thúc :</h2><br>
	  <input type="text" name="anh_end" required="" placeholder="link ảnh"><br>
	  
	  <input type="submit" value="Đăng Sản Phẩm" style="background-color: gray"><br>
	</form>
	
</body>
</html>