<?php
session_start();
if(!isset($_SESSION['iduser'])&&!isset($_SESSION['username'])){
    header('Location:../Login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="Admin.css">
	<script type="text/javascript" src="./jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./Admin.js"></script>
</head>
<body>
	<!-- phần tiêu đề  -->
	<div class="header">
		<center><h1>Chào mừng đến với trang Admin</h1></center>
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
				    <a class="nav-link" data-toggle="tab" href="./Quanlybaiviet.php">Quản Lý Bài Viết</a>
				  </li>
				   <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="#menu2">Quản Lý Đơn Hàng</a>
				  </li>
			</ul>
		</div>
		<div class="coten">
			<div class="Menu">
				<div class="menu1">
					<h4>Danh mục sản phẩm</h4>
					<button type="button" style="display: none" class="btn btn-secondary">Cây ăn trái</button>
					<?php 
						include('../connect.php');
		                //$idusers=$_SESSION['iduser'];
		                $a2 = "SELECT * FROM tb_danhmucsp ";
		                $result2 = $conn->prepare($a2);
		                $result2->execute();
		                foreach ($result2 as $row) {
		                	echo'<button type="button" class="btn btn-secondary"><span>'.$row['Name'].
		                		'</span><span class="id_dmsp" style="display:none;">'.$row['Id'].'</span>
		                	</button>';
		                }
					 ?>
					
					<!-- <button type="button" class="btn btn-secondary">Cây rau màu</button>
					<button type="button" class="btn btn-secondary">Cây cảnh</button>
					<button type="button" class="btn btn-secondary">Cây nông nghiệp</button>
					<button type="button" class="btn btn-secondary">Cây lâm nghiệp</button> -->
				</div>
				<div>
					<button id="add_dmsp" type="button" class="btn btn-secondary">Thêm mới</button>
				</div>
			</div>
			<div class="Sanpham">
				<table class="table table-bordered">
				    <thead>
				      <tr >
				      	<th>ID</th>
				        <th>Tên Sản Phẩm</th>
				        <th>Giá</th>
				        <th>Sửa</th>
				        <th>Xóa</th>
				      </tr>
				    </thead>
				    <tbody id="bodySP">
				    </tbody>
			 	</table>
			 	<a id="addsp" class="nav-link"  style="display: none;"><h4>Thêm sản phẩm mới</h4></a>
			</div>
		</div>
	</div>
	<!-- phần chuột phải của danh mục sp -->
	<div class="mouse_right">
		<ul class="list-group">
		  <li id="edit" class="list-group-item">Sửa</li>
		  <li id="delete"class="list-group-item">Xóa</li>
		</ul>
	</div>
	<!-- phần rename của danh mục sản phẩm -->
	<div class="rename">
		<p>Tên mới :</p>
		<input class="nameDmsp" type="text" name="tendmsp">
	</div>
	<!-- phần tạo mới danh mục sp -->
	<div class="new_dmsp">
		<p>Danh mục sản phẩm mới :</p>
		<input class="name_new" type="text" name="newdmsp">
	</div>
	<!-- phần nền đen -->
	<div class="black"></div>
</body>
</html>
