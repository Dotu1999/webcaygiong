<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Huy Garden Shop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="trangcaytrong.css">
</head>
<body>
	<!-- header-->
	 <header>
	 	<div class="row" style="margin-top: 15px;margin-left: 10px;">
		 	<div class="col-sm-4" style="display: flex">
		 		<img  src="./img/logo.jpg" style="border-radius: 50%;justify-content: center;align-items: center;">
		 	</div>
	    	<div class="col-sm-6">
	    		<center style="float: left;">
	    		<p id="title">Đỗ Huy Garden Shop</p>
	    		<p class="adress"> Địa chỉ:Thái Học-Bình Giang-Hải Dương</p>
	    		<p class="adress"> Hotline: 0979 265 304</p>
				</center>
	    	</div>
	    	<div  class="col-sm-2">
	    		<span>Truy Cập Giỏ Hàng</span>
	    		<svg style="width: 40px;cursor: pointer;" enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M207.9,455.7c-30.6,0-55.4-24.9-55.4-55.4c0-30.6,24.9-55.4,55.4-55.4c30.6,0,55.4,24.9,55.4,55.4    C263.4,430.9,238.5,455.7,207.9,455.7z M207.9,366c-18.9,0-34.3,15.4-34.3,34.3s15.4,34.3,34.3,34.3c18.9,0,34.3-15.4,34.3-34.3    S226.9,366,207.9,366z" fill="#6A6E7C"/><path d="M365,455.7c-30.6,0-55.4-24.9-55.4-55.4c0-30.6,24.9-55.4,55.4-55.4s55.4,24.9,55.4,55.4    C420.4,430.9,395.6,455.7,365,455.7z M365,366c-18.9,0-34.3,15.4-34.3,34.3s15.4,34.3,34.3,34.3s34.3-15.4,34.3-34.3    S383.9,366,365,366z" fill="#6A6E7C"/></g><path d="M419.7,360.7H153.2c-4.9,0-9.1-3.3-10.2-8.1L76.1,77.4H10.5C4.7,77.4,0,72.6,0,66.8s4.7-10.5,10.5-10.5   h73.9c4.9,0,9.1,3.3,10.2,8.1l21,86.4h385.8c3.6,0,6.9,1.8,8.8,4.8c1.9,3,2.3,6.7,0.9,10l-81.7,188.9   C427.7,358.2,423.9,360.7,419.7,360.7z M161.5,339.6h251.3l72.6-167.8H120.8L161.5,339.6z" fill="#6A6E7C"/></g></svg>
	    	</div>
    	</div>
	 </header>
	 <!-- phần tiêu đề -->
	 <div class="search-container" style="float: right;margin-right: 100px;">
     			 <input type="text" placeholder="Search..">
     			 <button type="button"><i>Tìm kiếm</i></button>
  	</div>
	 <div class="row" style="margin-top: 50px;margin-bottom: 20px;">
	 	<!-- phần danh mục sản phẩm -->
	 	
	    <div class="col-sm-3" style="">
	    	<center>
		    	<div class="containers" >
			  	  <div>
			  	  	<svg style="width: 25px" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M91.7,41.3c0-3.1-1.4-5.9-3.8-7.7c0.3-1,0.5-2.1,0.5-3.1c0-5.4-4.2-9.9-9.5-10.5c0-0.3,0-0.5,0-0.8   C78.9,12,73,6.1,65.7,6.1c-1.9,0-3.7,0.4-5.4,1.2c-1.8-3.3-5.3-5.5-9.1-5.5c-2.1,0-4.2,0.7-5.9,1.9C43.1,1.9,40.4,1,37.5,1   c-6.5,0-11.8,4.9-12.3,11.4c0,0,0,0-0.1,0c-5.5,0-10,4.3-10,9.8c0,1.3,0.3,2.5,0.8,3.7c-0.8,0.9-1.5,2-1.9,3.2   c-3.6,1.6-5.8,5.1-5.8,9.1c0,4.2,2.6,7.9,6.5,9.3c-0.2,0.6-0.3,1.2-0.3,1.8c0,2.5,1.5,4.8,3.8,5.7c-0.2,0.7-0.3,1.4-0.3,2.2   c0,3.5,2.3,6.5,5.5,7.5c-0.1,0.3-0.2,0.6-0.2,0.9c-0.2,1.8,1.1,3.4,2.9,3.6c1.8,0.2,3.4-1.1,3.6-2.9c0.1-0.7-0.1-1.4-0.5-2   c0.6-0.3,1.2-0.7,1.7-1.1c1.6,2.5,4.5,4,7.6,3.6c0.5,0.9,1.2,1.7,2,2.3C38.6,79.4,35.2,93.1,29.6,99h19.8h0.4h20   c-5-5.3-8.3-16.9-10.3-26.7c1-0.3,2-0.9,2.8-1.7c0.6,0.2,1.3,0.3,2,0.3c2.9,0,5.4-1.7,6.5-4.3c0.8,0.3,1.6,0.4,2.5,0.4   c3.7,0,6.8-2.6,7.7-6.1c4.9-0.1,8.9-4.2,8.9-9.2c0-1.3-0.3-2.7-0.9-3.9C90.8,46.1,91.7,43.8,91.7,41.3z M80.8,58.6   c-0.2,0-0.4,0-0.6,0L79,58.4l-0.1,1.2c-0.2,2.8-2.6,5-5.5,5c-0.9,0-1.8-0.2-2.6-0.7l-1.4-0.8l-0.3,1.6c-0.4,2.2-2.4,3.8-4.6,3.8   c-0.6,0-1.3-0.1-1.9-0.4l-0.8-0.4l-0.6,0.7c-0.5,0.7-1.2,1.1-2,1.4c-0.8-4.3-1.3-8-1.7-10.5c0,0,0,0,0,0c0.4-0.3,0.8-0.6,1.1-1   c0.2-0.2,0.2-0.4,0.3-0.7c0.1-0.2,0.1-0.5,0.2-0.7c0-0.2,0.1-0.5,0.1-0.7c0-0.2,0-0.5-0.1-0.7c0-0.2-0.1-0.4-0.2-0.6   c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1,0.2-0.1,0.4-0.2,0.6c-0.1,0.2-0.2,0.4-0.3,0.5c-0.1,0.2-0.2,0.3-0.3,0.4c-0.1,0.1-0.2,0.3-0.3,0.4   c-0.1,0.1-0.3,0.2-0.4,0.3c-0.1,0.1-0.3,0.1-0.4,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0.1-0.2,0.1-0.4,0.2   c-0.1,0-0.3,0.1-0.4,0.1c-0.1,0-0.1,0-0.2,0.1l-0.3,0.1c-0.1,0-0.3,0-0.4,0c-0.6,0-1.1-0.1-1.6-0.4L52,56.9L51.4,58   c-0.3,0.7-0.9,1.2-1.5,1.6c-0.2,0.1-0.3,0.2-0.5,0.2c-0.2,0.1-0.4,0.1-0.5,0.2c-0.1,0-0.2,0-0.3,0.1c0,0-0.2,0-0.2,0   c-0.2,0-0.4,0-0.6,0c-0.2,0-0.4,0-0.5-0.1c-0.2,0-0.4-0.1-0.5-0.2c-0.2-0.1-0.3-0.1-0.5-0.2c-0.2-0.1-0.3-0.2-0.5-0.3   c-0.6-0.5-1-1.1-1.3-1.8l-0.3-1l-1,0.2l-0.2,0l-0.1,0l0,0l0,0l0,0l0,0c0,0,0,0,0.1,0h0h0l-0.2,0c-0.1,0-0.2,0-0.4,0   c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.5,0c-0.2,0-0.3-0.1-0.5-0.1c-0.2-0.1-0.3-0.1-0.5-0.2   c-0.2-0.1-0.3-0.2-0.5-0.4c-0.1-0.1-0.1-0.1-0.2-0.2l-0.2-0.3c-0.1,0.2-0.1,0.4-0.1,0.7c0,0.2,0,0.5,0.1,0.7   c0.1,0.2,0.2,0.5,0.3,0.7c0.1,0.2,0.3,0.5,0.5,0.7c0.2,0.2,0.4,0.4,0.6,0.6c0.1,0.1,0.3,0.2,0.4,0.2c0.1,0,0.3,0,0.4,0.1   c0,0,0.1,0,0.1,0c-0.2,1.8-0.6,4.3-1.1,7.3c-0.3-0.4-0.5-0.8-0.7-1.2l-0.4-0.9l-1,0.3c-0.5,0.1-0.9,0.2-1.4,0.2   c-2.3,0-4.4-1.5-5.2-3.7l-0.7-2.2l-1.3,1.9c-1,1.4-2.7,2.3-4.5,2.3c-3,0-5.5-2.5-5.5-5.5c0-0.8,0.2-1.7,0.6-2.4l0.7-1.4L20,53.2   c-1.9-0.3-3.2-1.9-3.2-3.8c0-0.7,0.2-1.4,0.5-2l0.8-1.4l-1.6-0.4c-3.5-0.8-6-3.9-6-7.4c0-3.2,1.9-5.9,4.8-7.1l0.5-0.2l0.2-0.6   c0.4-1.3,1.1-2.4,2-3.3l0.6-0.6l-0.4-0.8c-0.6-1.1-0.9-2.3-0.9-3.5c0-4.2,3.4-7.6,7.6-7.6c0.3,0,0.6,0,1,0.1l1.4,0.2l0-1.6   c0-5.5,4.5-10,10-10c2.6,0,5,1,6.9,2.7l0.8,0.7L46,6c1.4-1.2,3.3-1.9,5.2-1.9c3.3,0,6.3,2.1,7.5,5.2l0.5,1.3l1.2-0.7   C62,9,63.8,8.5,65.7,8.5c6,0,10.8,4.9,10.8,10.8c0,0.6,0,1.2-0.1,1.7l-0.2,1.4l1.4,0c0.1,0,0.1,0,0.2,0l0.1,0   c4.5,0,8.2,3.7,8.2,8.2c0,1.1-0.2,2.1-0.6,3.1L85,34.6l0.9,0.5c2.2,1.3,3.5,3.6,3.5,6.2c0,2.1-0.9,4.1-2.5,5.4l-0.7,0.7l0.5,0.8   c0.6,1.1,1,2.3,1,3.5C87.6,55.5,84.6,58.6,80.8,58.6z"/><circle cx="32" cy="32" r="3"/><circle cx="63.6" cy="27.2" r="3.2"/><circle cx="69" cy="49.2" r="3.5"/><circle cx="45.5" cy="15.4" r="3.2"/><circle cx="47.3" cy="50" r="2.9"/><circle cx="27.5" cy="51.9" r="2.4"/></g></svg>
			  	  	<a  href="./trangcaytrong.php" style="color: black;text-decoration: none"><span> Danh mục sản phẩm</span></a>	
			  	  </div>
				  <ul class="nav flex-column">
				    <?php 
				  		include('../connect.php');
		                //$idusers=$_SESSION['iduser'];
		                $a2 = "SELECT * FROM tb_danhmucsp ";
		                $result2 = $conn->prepare($a2);
		                $result2->execute();
		                foreach ($result2 as $row) {
		                	echo '<li class="nav-item" style="display:flex;">
								      <span><a class="nav-link" style="color:blue;cursor: pointer;"
								      href="./trangcaytrong.php?idDmsp='.$row['Id'].'">'
								      .$row['Name'].'</span>
								      </a>
								      <span class="id_dmsp" style="display:none;">'.$row['Id'].'</span>
								  </li>';
		                }
				  	 ?>
				  </ul>
				  <div>
				  <div style="display: flex;justify-content: center;">
				  	<svg height="48px" id="svg1724" width="48px" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs id="defs3"><radialGradient cx="605.71429" cy="486.64789" fx="605.71429" fy="486.64789" gradientTransform="matrix(-2.774389,0,0,1.969706,112.7623,-872.8854)" gradientUnits="userSpaceOnUse" id="radialGradient6719" r="117.14286" xlink:href="#linearGradient5060"/><linearGradient id="linearGradient5060"><stop id="stop5062" offset="0" style="stop-color:black;stop-opacity:1;"/><stop id="stop5064" offset="1" style="stop-color:black;stop-opacity:0;"/></linearGradient><radialGradient cx="605.71429" cy="486.64789" fx="605.71429" fy="486.64789" gradientTransform="matrix(2.774389,0,0,1.969706,-1891.633,-872.8854)" gradientUnits="userSpaceOnUse" id="radialGradient6717" r="117.14286" xlink:href="#linearGradient5060"/><linearGradient id="linearGradient5048"><stop id="stop5050" offset="0" style="stop-color:black;stop-opacity:0;"/><stop id="stop5056" offset="0.5" style="stop-color:black;stop-opacity:1;"/><stop id="stop5052" offset="1" style="stop-color:black;stop-opacity:0;"/></linearGradient><linearGradient gradientTransform="matrix(2.774389,0,0,1.969706,-1892.179,-872.8854)" gradientUnits="userSpaceOnUse" id="linearGradient6715" x1="302.85715" x2="302.85715" xlink:href="#linearGradient5048" y1="366.64789" y2="609.50507"/><linearGradient id="linearGradient2951"><stop id="stop2953" offset="0" style="stop-color:#000000;stop-opacity:1;"/><stop id="stop2955" offset="1" style="stop-color:#000000;stop-opacity:0;"/></linearGradient><linearGradient id="linearGradient2941"><stop id="stop2943" offset="0" style="stop-color:#ffffff;stop-opacity:1;"/><stop id="stop2945" offset="1" style="stop-color:#ffffff;stop-opacity:0;"/></linearGradient><linearGradient id="linearGradient2926"><stop id="stop2928" offset="0.0000000" style="stop-color:#787878;stop-opacity:1.0000000;"/><stop id="stop2930" offset="1.0000000" style="stop-color:#d0d0d0;stop-opacity:1.0000000;"/></linearGradient><linearGradient id="linearGradient2908"><stop id="stop2910" offset="0" style="stop-color:#828282;stop-opacity:1;"/><stop id="stop2912" offset="1" style="stop-color:#828282;stop-opacity:0;"/></linearGradient><linearGradient id="linearGradient2831"><stop id="stop2833" offset="0.0000000" style="stop-color:#919191;stop-opacity:1.0000000;"/><stop id="stop2839" offset="0.20232038" style="stop-color:#e9e9e9;stop-opacity:1.0000000;"/><stop id="stop2843" offset="0.23641536" style="stop-color:#f3f3f3;stop-opacity:1.0000000;"/><stop id="stop2841" offset="0.29892281" style="stop-color:#e6e6e6;stop-opacity:1.0000000;"/><stop id="stop2835" offset="1.0000000" style="stop-color:#f8f8f8;stop-opacity:1.0000000;"/></linearGradient><linearGradient gradientTransform="matrix(1.376922,0.000000,0.000000,0.824973,-1.442762,-2.734599)" gradientUnits="userSpaceOnUse" id="linearGradient2837" x1="17.827532" x2="17.808550" xlink:href="#linearGradient2831" y1="46.606094" y2="17.640900"/><linearGradient gradientTransform="matrix(1.119541,0.000000,0.000000,0.893223,0.125000,-1.125000)" gradientUnits="userSpaceOnUse" id="linearGradient2932" x1="12.745098" x2="12.728428" xlink:href="#linearGradient2926" y1="38.134369" y2="25.539530"/><linearGradient gradientTransform="matrix(1.310510,0.000000,0.000000,0.763062,0.125000,-1.125000)" gradientUnits="userSpaceOnUse" id="linearGradient2947" x1="4.6806560" x2="40.419140" xlink:href="#linearGradient2941" y1="13.835308" y2="73.135864"/><radialGradient cx="11.770608" cy="44.613575" fx="11.770608" fy="44.613575" gradientTransform="scale(2.033667,0.491723)" gradientUnits="userSpaceOnUse" id="radialGradient2957" r="10.295440" xlink:href="#linearGradient2951"/></defs><g id="layer1"><g id="g6707" transform="matrix(2.374466e-2,0,0,2.086758e-2,44.68185,33.2786)"><rect height="478.35718" id="rect6709" style="opacity:0.40206185;color:black;fill:url(#linearGradient6715);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible" width="1339.6335" x="-1559.2523" y="-150.69685"/><path d="M -219.61876,-150.68038 C -219.61876,-150.68038 -219.61876,327.65041 -219.61876,327.65041 C -76.744594,328.55086 125.78146,220.48075 125.78138,88.454235 C 125.78138,-43.572302 -33.655436,-150.68036 -219.61876,-150.68038 z " id="path6711" style="opacity:0.40206185;color:black;fill:url(#radialGradient6717);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible"/><path d="M -1559.2523,-150.68038 C -1559.2523,-150.68038 -1559.2523,327.65041 -1559.2523,327.65041 C -1702.1265,328.55086 -1904.6525,220.48075 -1904.6525,88.454235 C -1904.6525,-43.572302 -1745.2157,-150.68036 -1559.2523,-150.68038 z " id="path6713" style="opacity:0.40206185;color:black;fill:url(#radialGradient6719);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible"/></g><path d="M 6.6318643,11.549491 L 2.3792281,31.036252 C 1.6982888,34.156506 3.1866903,36.150182 5.3399238,36.150182 L 42.590860,36.150182 C 44.744093,36.150182 46.246357,33.815110 45.497724,31.090083 L 40.114641,11.495661 C 39.966374,10.955968 39.277978,10.525719 38.715040,10.526706 L 8.0314653,10.580537 C 7.2043318,10.581987 6.7925280,10.813285 6.6318643,11.549491 z " id="path1943" style="fill:url(#linearGradient2837);fill-opacity:1.0000000;fill-rule:evenodd;stroke:#828282;stroke-width:1.0000000;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4.0000000;stroke-opacity:1.0000000"/><path d="M 36.854646,13.732143 L 28.535714,13.732143 L 29.311828,18.303571 L 37.696429,18.303571 L 36.854646,13.732143 z " id="path2850" style="fill:#000000;fill-opacity:0.17543860;fill-rule:evenodd;stroke:none;stroke-width:1.0000000px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1.0000000"/><path d="M 38.714286,21.357143 L 23.714286,21.357143" id="path2852" style="stroke-opacity:0.099415191;stroke-linejoin:miter;stroke-linecap:round;stroke-width:1.0000000px;stroke:#000000;fill-rule:evenodd;fill-opacity:0.75000000;fill:none"/><path d="M 39.214286,23.357143 L 23.714286,23.357143" id="path2854" style="fill:none;fill-opacity:0.75000000;fill-rule:evenodd;stroke:#000000;stroke-width:1.0000000px;stroke-linecap:round;stroke-linejoin:miter;stroke-opacity:0.099415191"/><path d="M 39.839286,25.357143 L 23.714286,25.357143" id="path2856" style="stroke-opacity:0.12280702;stroke-linejoin:miter;stroke-linecap:round;stroke-width:1.0000000px;stroke:#000000;fill-rule:evenodd;fill-opacity:0.75000000;fill:none"/><path d="M 40.410467,27.357143 L 23.705605,27.357143" id="path2858" style="stroke-opacity:0.15204678;stroke-linejoin:miter;stroke-linecap:round;stroke-width:0.99128145px;stroke:#000000;fill-rule:evenodd;fill-opacity:0.75000000;fill:none"/><path d="M 41.035175,29.357143 L 23.705897,29.357143" id="path2860" style="fill:none;fill-opacity:0.75000000;fill-rule:evenodd;stroke:#000000;stroke-width:0.99157524px;stroke-linecap:round;stroke-linejoin:miter;stroke-opacity:0.15204675"/><path d="M 41.784851,31.357143 L 23.706221,31.357143" id="path2862" style="fill:none;fill-opacity:0.75000000;fill-rule:evenodd;stroke:#000000;stroke-width:0.99190271px;stroke-linecap:round;stroke-linejoin:miter;stroke-opacity:0.15204675"/><path d="M 40.852709,33.357143 L 23.700863,33.357143" id="path2864" style="stroke-opacity:0.11695904;stroke-linejoin:miter;stroke-linecap:round;stroke-width:0.98648584px;stroke:#000000;fill-rule:evenodd;fill-opacity:0.75000000;fill:none"/><g id="g2882" transform="translate(0.500000,-1.125000)"><text id="text2866" style="font-size:6.5877376;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;fill:#000000;fill-opacity:1.0000000;stroke:none;stroke-width:1.0000000px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1.0000000;font-family:Times New Roman;text-anchor:start;writing-mode:lr-tb" transform="matrix(1.000000,0.000000,-0.169202,1.000000,0.000000,0.000000)" x="11.739901" y="19.331924"><tspan id="tspan2868" x="11.739901" y="19.331924"/></text><text id="text2870" style="font-size:6.5877376;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;fill:#000000;fill-opacity:1.0000000;stroke:none;stroke-width:1.0000000px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1.0000000;font-family:Times New Roman;text-anchor:start;writing-mode:lr-tb" transform="matrix(1.000000,0.000000,-0.114632,1.000000,0.000000,0.000000)" x="15.444986" y="19.331924"><tspan id="tspan2872" x="15.444986" y="19.331924"/></text><text id="text2874" style="font-size:6.5877376;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;fill:#000000;fill-opacity:1.0000000;stroke:none;stroke-width:1.0000000px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1.0000000;font-family:Times New Roman;text-anchor:start;writing-mode:lr-tb" transform="matrix(1.000000,0.000000,5.603472e-2,1.000000,0.000000,0.000000)" x="16.637789" y="19.331924"><tspan id="tspan2876" x="16.637789" y="19.331924"/></text><text id="text2878" style="font-size:6.5877376;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;fill:#000000;fill-opacity:1.0000000;stroke:none;stroke-width:1.0000000px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1.0000000;font-family:Times New Roman;text-anchor:start;writing-mode:lr-tb" transform="matrix(1.000000,0.000000,0.109619,1.000000,0.000000,0.000000)" x="21.811335" y="19.328707"><tspan id="tspan2880" x="21.811335" y="19.328707"/></text></g><path d="M 21.125000,21.375000 L 21.125000,33.375000 L 8.1874999,33.375000 C 7.0555768,33.375000 6.1249999,32.187500 6.6874999,30.500000 C 6.6874999,30.500000 8.6249999,21.375000 8.6249999,21.375000 L 21.125000,21.375000 z " id="path2924" style="fill:url(#linearGradient2932);fill-opacity:1.0000000;fill-rule:evenodd;stroke:#9e9e9e;stroke-width:1.0000000px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1.0000000"/><path d="M 20.187500,31.437500 L 7.6875000,31.437500" id="path2934" style="fill:none;fill-opacity:0.75000000;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.0000000px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:0.30994150"/><path d="M 20.187500,31.437350 L 7.6875000,31.437350" id="path2937" style="fill:none;fill-opacity:0.75000000;fill-rule:evenodd;stroke:#ffffff;stroke-width:2.4495406px;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:0.30994150"/><path d="M 7.4330493,12.290153 L 3.4527295,31.055192 C 3.0113565,33.136025 3.1341190,35.141495 5.4303252,35.141495 L 42.123439,35.141495 C 44.357145,35.141495 45.079222,33.295029 44.301442,30.479785 L 39.279677,12.303060 C 39.142367,11.806056 38.821386,11.472031 38.302769,11.472893 L 8.4724575,11.522485 C 7.8354451,11.523544 7.5463405,11.756047 7.4330493,12.290153 z " id="path2939" style="fill:none;fill-opacity:1.0000000;fill-rule:evenodd;stroke:url(#linearGradient2947);stroke-width:0.98188436px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1.0000000"/><path d="M 6.2187500 31.437500 A 0.96875000 0.96875000 0 1 1  4.2812500,31.437500 A 0.96875000 0.96875000 0 1 1  6.2187500 31.437500 z" id="path2963" style="overflow:visible;display:inline;visibility:visible;marker-end:none;marker-mid:none;marker-start:none;marker:none;stroke-opacity:1.0000000;stroke-dashoffset:0.0000000;stroke-miterlimit:4.0000000;stroke-linejoin:round;stroke-linecap:round;stroke-width:1.0000000;stroke:none;fill-rule:nonzero;fill-opacity:0.63742691;fill:#ffffff;color:#000000" transform="translate(-0.156250,0.125000)"/></g></svg>
				  	<a class="nav-link" href="./trangbaiviet.php" style="color: black"><span style="cursor: pointer;">Bài viết</span></a></div>
				  	<hr>
				  	<div style="font-size: 30px;">Bài viết nổi bật</div>
				  	<!-- phần tin nổi bật -->
				  	<div id="tinnong">
				  		<?php
				  		$a11 = "SELECT * FROM tb_baiviet where Status='1' ORDER BY Id DESC ";
			            $result11 = $conn->prepare($a11);
			            $result11->execute();
			            foreach ($result11 as $row){
				  		echo'<div><a href="./baivietcuthe.php?id='.$row['Id'].'">'.$row['Title'].'</a></div>
				  		<hr>';}
				  		?>
				  	</div>
				  	<img src="img/nongdan.jpg" style="width: 200px;margin-bottom: 50px;">
				  </div>
				</div>
			</center>
	    </div>
	    <!-- phần nội dung sản phẩm -->
	    <div class="col-sm-9"  style="background-color:#d5ecab;">
	    	<div class="row list">
	    	<?php
	    	// include('../connect.php');
            $a21 = "SELECT * FROM tb_baiviet ORDER BY Id DESC ";
            $result21 = $conn->prepare($a21);
            $result21->execute();
            foreach ($result21 as $row) {		                
			  echo'<div class="col-sm-4">
			  	<div class="conten">
			  		<img src="'.$row['AnhMoTa'].'">
			  		<a href="./baivietcuthe.php?id='.$row['Id'].'"><center>'.$row['Title'].'</center></a>
			  		<p style="color:black;font-size:14px">'.$row['MoTa'].'</p>
			  	</div>
			  </div>';}
			  ?>
			</div>
	    </div>
  	</div>
  	<!-- phần footder -->
	<div class="footer">
		<center>
			<p><center>Quý khách mua hàng xin vui lòng liên hệ số hotline: 0979 265 304-Ths: Đỗ Văn Huy</center></p>
			<p>
				<svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M28,5H4C1.791,5,0,6.792,0,9v13c0,2.209,1.791,4,4,4h24c2.209,0,4-1.791,4-4V9  C32,6.792,30.209,5,28,5z M2,10.25l6.999,5.25L2,20.75V10.25z M30,22c0,1.104-0.898,2-2,2H4c-1.103,0-2-0.896-2-2l7.832-5.875  l4.368,3.277c0.533,0.398,1.166,0.6,1.8,0.6c0.633,0,1.266-0.201,1.799-0.6l4.369-3.277L30,22L30,22z M30,20.75l-7-5.25l7-5.25  V20.75z M17.199,18.602c-0.349,0.262-0.763,0.4-1.199,0.4c-0.436,0-0.851-0.139-1.2-0.4L10.665,15.5l-0.833-0.625L2,9.001V9  c0-1.103,0.897-2,2-2h24c1.102,0,2,0.897,2,2L17.199,18.602z" fill="#333333" id="mail"/></svg> <span style="color: black">:huy1994@gmail.com</span>
			</p>
			<p>
				<svg enable-background="new 0 0 56.693 56.693" height="30px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg>
				<a href="https://www.facebook.com/Cothebankhongthich" style="color: black">:Liên hệ face book</a>
			</p>
		</center>

	</div>

</body>
</html>