<?php 
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/lib/Session.php');
Session::init();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text:100,300,400,500,600,700,800&display=swap" rel="stylesheet">

	

	<style>
		.alert{
			padding: 7px;
			margin-bottom: 5px;
		}

		body{
			font-family: 'Big Shoulders Text', cursive;
		}

		label{
			font-size: 25px;
			font-weight: normal;
		}

		.breadcrumb{
			background-color: #428bca;
			border-radius: 0px;
			margin-bottom: 0;
		}

		.breadcrumb li a{
			color: #fff;
		}

		.breadcrumb .active{
			color: #ddd;
		}

		.panel-heading h3{
			font-size: 40px;
			font-weight: 100;	
		}
	</style>
</head>
<body>

	<section>
		<ol class="breadcrumb bg-primary">
			<li><a href="index.php">Home</a></li>
			<li class="active">Sign In</li>
		</ol>
	</section>

	<div class="container">
		<div class="row">
			
			<div class="col-md-3"></div>

			<div class="col-md-6" style="margin-top: 10vh;">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">
						<h3>Sign in to your account!</h3>
					</div>
					<?php

					$filepath = realpath(dirname(__FILE__));
					include_once ($filepath.'/class/Login.php');
					$log = new Login();
					if($_SERVER['REQUEST_METHOD'] == 'POST') {
						$email = $_POST['email'];
						$password = $_POST['password'];

						$login = $log->Adminlogin($email,$password);
					}

					?>
					<div class="panel-body" style="padding: 20px 30px 30px 30px;">
						
						<form action="" method="POST">
							
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" id="email" class="form-control" name="email" placeholder="Email" value="">
							</div>
							
							<div class="form-group">
								<label for="password">Password</label>

								<div class="input-group">
									<input type="password" id="password" class="form-control pwd" name="password" placeholder="******">
									<span class="input-group-btn">
										<button class="btn btn-default reveal" type="button"><i id="eye" class="fa fa-eye"></i></button>
									</span>          
								</div>

							</div>
							<button type="submit" class="btn btn-primary btn-block btn-lg" name="signin">SIGN IN</button>

						</form>
					</div>

				</div>

				<div class="row">
					<div class="col-md-6 text-center" style="margin-bottom: 15px;">
						<a href="index.php" class="btn btn-info btn-block"> Back To Home</a>
					</div>
					<div class="col-md-6 text-center" style="margin-bottom: 15px;">
						<a href="registration.php" class="btn btn-success btn-block">Go To Sign Up</a>
					</div>
				</div>

			</div>

			<div class="col-md-3"></div>

		</div>



		

		


	</div>

	<script
	src="https://code.jquery.com/jquery-1.12.4.min.js"
	integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
	crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script>
		$(".reveal").on('click',function() {
			var $pwd = $(".pwd");
			if ($pwd.attr('type') === 'password') {
				$pwd.attr('type', 'text');
				$("#eye").attr("class","fa fa-eye-slash");
			}else {
				$pwd.attr('type', 'password');
				$("#eye").attr("class","fa fa-eye");
			}
		});
	</script>
	
</body>
</html>



