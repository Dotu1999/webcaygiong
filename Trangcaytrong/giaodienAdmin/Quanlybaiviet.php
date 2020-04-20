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
	<title>Quản Lý Bài Viết</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="Admin.css">
	<script type="text/javascript" src="./jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./Admin.js"></script>
</head>
<body>
	<!-- phần tiêu đề  -->
	<div class="header">
		<center><h1>Quản Lý Bài Viết</h1></center>
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
			<div class="BaiViet">
				<center>
				<table class="table table-bordered">
				    <thead>
				      <tr>
				      	<th>ID</th>
				        <th>Tiêu Đề Bài Viết</th>
				        <th>Trạng Thái</th>
				        <th>Sửa</th>
				        <th>Xóa</th>
				      </tr>
				    </thead>
				    <tbody id="body_BV">
				    <?php
				    include('../connect.php');
		                $a2 = "SELECT * FROM tb_baiviet ";
		                $result2 = $conn->prepare($a2);
		                $result2->execute();
		                foreach ($result2 as $row) {
						      echo'<tr>
						      	<td>'.$row['Id'].'</td>
						        <td>'.$row['Title'].'</td>
						        <td>'.$row['Status'].'</td>
						        <td class ="Editbaiviet" style="cursor: pointer;">Edit</td>
						        <td class="DeleBaiViet" style="cursor: pointer;">Delete</td>
						      </tr>';}
				     ?>
				    </tbody>
			 	</table>
			 </center>
			 	<a class="nav-link" data-toggle="tab" href="./ThongtinBV.php"><h4>Thêm Bài viết Mới</h4></a>
			</div>
		</div>
	</div>
	
</body>
</html>