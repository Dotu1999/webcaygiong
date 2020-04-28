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
	<title>Chi tiết đơn hàng</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="Admin.css">
	<script type="text/javascript" src="./jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./Admin.js"></script>
</head>
<body>
	<!-- phần tiêu đề  -->
	<div class="header">
		<center><h1>Chi Tiết Đơn Hàng</h1></center>
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
				<?php 
					$c=$_GET['iddh'];
					include('../connect.php');
		                $a2 = "SELECT AnhMoTa,Name,Gia,Soluong,Soluong*Gia as Thanhtien from tb_sanpham,tb_donhang,tb_sanpham_donhang where tb_sanpham.Id=tb_sanpham_donhang.IdSanPham and tb_sanpham_donhang.IdDonHang=tb_donhang.Id and tb_donhang.Id='$c'";
		                $result2 = $conn->prepare($a2);
		                $result2->execute();
		                foreach ($result2 as $row) {
						      echo'<div class="sanpham1" style="display: flex;width: 100%;height: 200px;justify-content: space-around;">
						    			<img style="width: 100px;height: 100px;" src="'.$row['AnhMoTa'].'">
						    			<h5><b>'.$row['Name'].'</b></h5>
						    			<h5>Giá : '.$row['Gia'].'.đ</h5>
						    			<h5>Số Lượng:'.$row['Soluong'].'</h5>
						    			<h5>Thành tiền :'.$row['Thanhtien'].'.đ</h5>
						    		</div>';}
				   
				 ?>
				<?php 
					$a3 = "SELECT SUM(Soluong*Gia) AS Tong from tb_sanpham,tb_donhang,tb_sanpham_donhang where tb_sanpham.Id=tb_sanpham_donhang.IdSanPham and tb_sanpham_donhang.IdDonHang=tb_donhang.Id and tb_donhang.Id='$c'";
		                $result3 = $conn->prepare($a3);
		                $result3->execute();
		                foreach ($result3 as $row) {
		                	echo'<h3 style="color: red">Tổng Tiền : '.$row['Tong'].'.đ</h3><br>';
		                }
				 ?>
	    		<a href="./QuanlyDonhang.php">Quay lại trang đơn hàng</a>
			</div>
		</div>
	</div>
	
</body>
</html>