<?php
	session_start();
?>
<html>
	<head>
		<title>
			Đăng nhập
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body style="background: url('images/shutterstock_390581569.jpg'); ">
		<img class="logo" src="images/my-logo.png"/> 
		<h1 id="title">
			Phòng vé Đà Lạt PV	</h1>
		<div>
		<div class="topnav">
			<div class="col-md-7">
			<a class="fa fa-home" aria-hidden="true" href="index.html" style="background-color: #04AA6D;">Trang chính</a>
			<a class="fa fa-ticket" aria-hidden="true" href="login_page.php">Đặt vé</a>
			<a class="fa fa-home" aria-hidden="true" href="index.html">Khuyến mãi</a>
			<a class="fa fa-sign-in" aria-hidden="true" href="login_page.php">Đăng nhập</a>
			<a class="fa fa-phone" aria-hidden="true" href="index.html">Liên hệ</a>
    		</div>
		</div>
		<br>
		<br>
		<br>
		<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST">
			<fieldset style="background: white;">
				<legend>Đăng nhập:-</legend>
				<strong>Tài khoản:</strong><br>
				<input type="text" name="username" placeholder="Nhập tên tài khoản" required><br><br>
				<strong>Mật khẩu:</strong><br>
				<input type="password" name="password" placeholder="Nhập mật khẩu" required><br><br>
				<strong>User Type:</strong><br>
				Khách hàng <input type='radio' name='user_type' value='Customer' checked/> Nhân viên <input type='radio' name='user_type' value='Administrator'/>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Sai tên đăng nhập hoặc mật khẩu</strong>
						<br><br>";
					}
				?>
				<input type="submit" name="Login" value="Login">
			</fieldset>
			<br>
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký tài khoản mới</a>
		</form>
	</body>
</html>