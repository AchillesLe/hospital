<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bệnh viện quân dân y miền đông - đăng nhập</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        
		<div class="card-header">Đăng nhập</div>
		<?php 
			if(isset($_SESSION['message-login'])){
				echo "<div class='alert alert-danger'>{$_SESSION['message-login']}</div>";
				unset($_SESSION['message-login']);
			}
			if(isset($_SESSION['message-register'])){
				echo "<div class='alert alert-success'>{$_SESSION['message-register']}</div>";
				unset($_SESSION['message-register']);
			}
    ?>
        <div class="card-body">
			<form action="/p-dangnhap" method="POST">
				<div class="form-group">
				<div class="form-label-group">
					<input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
					<label for="inputEmail">Email</label>
				</div>
				</div>
				<div class="form-group">
				<div class="form-label-group">
					<input type="password" id="inputPassword" name="matkhau" class="form-control" placeholder="Password" required="required">
					<label for="password">Mật khẩu</label>
				</div>
				</div>
				<input class="btn btn-primary btn-block" type="submit" name="submit" value="Đăng Nhập">
			</form>
			<div class="text-center">
				<a class="d-block small mt-3" href="/dangki">Đăng kí</a>
				<a class="d-block small" href="/forgot-password">Quên mật khẩu !</a>
			</div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
