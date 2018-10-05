<?php
	include('./users.php');
	$obj_users = new users();
	$users = $obj_users ->getUsers();
	var_dump($users);
	die();
?>
<!DOCTYPE!>
<html lang="en">
<head>
	<title>
		Document
	</title>
	<link rel="stylesheet" type="text/css" href="./TaiNguyen/css/bootstrap.min">
	<link rel="stylesheet" type="text/css" href="./TaiNguyen/fonts">
	<link rel="stylesheet" type="text/css" href="./TaiNguyen/css/styles.css">
	<style type="text/css">
		.ourteam{
			color: blue;
			text-align: center;
			font-size: 20px;
			padding: 60px 0px;
		}
		.mds1 {
			padding:30px 0px 0px 0px;
		}
		.mds2 {
			padding: 40px 0px 0px 0px;
		}
		.mds3 {
			padding: 0px 0px 0px 40px;

		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="ourteam">  OUR TEAM </div>
		<div class="row">
			<div class="col-md-4"> 
				<img src="public/images/1.png">
				<a href="#"><br><p class="mds3"> ROBERT JOHNSON </p></a>
			</div>
			<div class="col-md-4"> 
				<div class="mds1">
					<img src="public/images/2.png">
					<a href="#"><br><p class="mds3"> ROBERT JOHNSON </p> </a>
				</div>
			</div>
			<div class="col-md-4"> 
				<div class="mds2">
					<img src="public/images/3.png">
					<a href="#"><br><p class="mds3"> ROBERT JOHNSON </p></a>
				</div>
			</div>
	</div>
</body>
</html>