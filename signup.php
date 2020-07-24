<?php
	require 'connect.php';
	if(isset($_POST['submit'])){ //check button submit or not
		if($_POST['pwd'] == $_POST['pwd1']){	// check password and confir passowrd 
			$name = $_POST['name'];	// fetch form data and store in variable
			$number = $_POST['number'];
			$email = $_POST['email'];
			$pwd = $_POST['pwd'];
			
			// insert query
			
			$inst = mysqli_query($con,"insert into user(name , mobile , email , password)values('$name' ,'$number' ,'$email' , '$pwd')");
			if($inst){
				echo '<script>alert("Insert successfully");</script>';
			}else{
				echo '<script>alert("Insertion Faild.");</script>';
			}
			
		}else{
			echo '<script>alert("Please Check paasword and confirm password");</script>';
		}
	}
	
 ?>

<html>
	<head>
		 <title>AutoCare Sign-Up</title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex, nofollow">

		<title>Sign-Up</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<style type="text/css">
		

			body{
			background-image: url('https://images.unsplash.com/photo-1460602594182-8568137446ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80');
			background-size: cover;
			height: 100%;
			font-family: 'Numans', sans-serif;
			}

			.container{
			height: 100%;
			align-content: center;
			}
			.card-header h3{
			color:yellow;
			}
			.card{
			height: 620px;
			margin-top: auto;
			margin-bottom: auto;
			width: 400px;
			background-color: rgba(0,0,0,0.5) !important;
			}

			</style>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	</head>
	<body>
	
		<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="style.css">


		<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header text-warning">
						<h3 class="text-warning"><center> Sign up</center></h3>
					</div>
					<div class="card-body">
						<form action="#" method="post">

						  <div class="form-group text-white">
							<label for="UserName">UserName</label>
							<input type="text" class="form-control" name="name" placeholder="Enter Name" required>
						  </div>
						  
						   <div class="form-group text-white">
							<label for="">Mobile Number:</label>
							<input type="number" class="form-control" name="number" placeholder="Enter Number" required>
						  </div>
						  
						  <div class="form-group text-white">
							<label for="email">Email ID:</label>
							<input type="email" class="form-control" name="email" placeholder="Enter Email" required>
						  </div>
						  
						  <div class="form-group text-white">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" name="pwd" placeholder="Enter Password">
						  </div>

						  <div class="form-group text-white">
							<label for="pwd">Confirm Password:</label>
							<input type="password" class="form-control" name="pwd1" placeholder="Confirm Password">
						  </div>
						  <div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
								<label class="form-check-label text-white" for="exampleCheck1">I accept the <span style="color:#2196f3;">Term of use</span> & <span style="color:#2196f3;">Privacy Policy.</span></label>
							  </div>
							<input  type="submit" class="btn btn-primary" name="submit" value="Sign UP"><span style="text-decoration:none;" "color:white;"></span>
							<a href="login1.php" class="btn btn-primary">Sign IN</a>
						</form><br>
					</div>
					
				</div>
			</div>
		</div>
	</body>
</html>
