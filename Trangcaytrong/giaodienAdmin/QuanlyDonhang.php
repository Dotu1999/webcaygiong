<?php  ?>
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
	<title>Quản Lý Đơn Hàng</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="Admin.css">
	<script type="text/javascript" src="./jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./Admin.js"></script>
</head>
<body>
	<!-- phần tiêu đề  -->
	<div class="header">
		<center><h1>Quản Lý Đơn Hàng</h1></center>
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
				    <a class="nav-link" data-toggle="tab" href="./QuanlyDonhang.php">Quản Lý Đơn Hàng</a>
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
				        <th>Tên Khách hàng</th>
				        <th>Số điện thoại</th>
				        <th>Email</th>
				        <th>Địa chỉ</th>
				        <th>Ngày đặt hàng</th>
				        <th>Chi tiết đơn hàng</th>
				        <th>Xóa</th>
				      </tr>
				    </thead>
				    <tbody id="body_BV">
				    <?php
				    include('../connect.php');
		                $a2 = "SELECT * FROM tb_donhang ";
		                $result2 = $conn->prepare($a2);
		                $result2->execute();
		                foreach ($result2 as $row) {
						      echo'<tr>
						      	<td>'.$row['Id'].'</td>
						        <td>'.$row['NameKH'].'</td>
						        <td>'.$row['Phone'].'</td>
						        <td>'.$row['Email'].'</td>
						        <td>'.$row['Address'].'</td>
						        <td>'.$row['Time'].'</td>
						        <td class ="xemchitiet" style="cursor: pointer;">Xem chi tiết</td>
						        <td class="DeleDonhang" style="cursor: pointer;">Delete</td>
						      </tr>';}
				     ?>
				    </tbody>
			 	</table>
			 </center>
			</div>
		</div>
	</div>
	
</body>
</html>