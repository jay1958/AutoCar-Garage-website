<?php 
	include 'connect.php';
	session_start();
	error_reporting(0);
	if(isset($_POST['login'])){
		$name = $_POST['username'];
		$password = $_POST['password'];
		
		$log = mysqli_query($con, "select * from user where name = '$name' OR email = '$name' AND password = '$password'");
		if(mysqli_num_rows($log) >  0){	// 1 > 0 true
			$user = mysqli_fetch_assoc($log);	// array user 
			//print_r($user);
			$_SESSION['user'] = array('id' => $user['id'], 'name' => $user['name'], 'email' => $user['email'], 'number' => $user['mobile']);
			// echo $_SESSION['log'] = $user['id'];	// user, id
			// $_SESSION['name'] = $user['name'];	//user, name
			echo "1";
		}else{
			echo '2';
		}
		exit;
	}
	$title='Login US';
	include'header.php'; 
?>
<head>
	 <title>Autocare Login</title>
		<style type="text/css"> 
		 
		.err{
			border: 1px solid red;
		}
		body{
			background-image: url(Image/black.jpg);
			background-size: cover;
			background-attachment: fixed;
			font-family: calibri light;
			;
		}
		
		.in{
			position: relative;
			border-radius: 5px;
		}
		.but1{
			
			background:transparent;
			color:white;
			text-align:center;
		}
		.btn-yellow {
		color: #030304;
		background:#ee3131;
		}
		.btn {
			position: relative;
			border-radius: 50px;
			outline: none!important;
		}
		.btn-block {
		    display: block;
		    width: 50%;
		}
		.form-control {
		    border-radius: 10px;
		 }
			
			
		</style>
		<link rel="stylesheet" type="text/css" href="css/login2.css">
	</head>
	<div class="login mb-5">
		<div class="container">
										
			<div class="row mt-5">
					<div class="col-md-5"></div>
					<div class="col-md-2" style="text-align: center;">
						<h1 class="text-center mt-5 mb-5 but1"><strong>LOGIN</strong></h1>	
					</div>
					<div class="col-md-5"></div>
				
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form id="loginform">
							
						<div class='alert alert-danger error' style="display: none;">Please check your username & password</div>
						<input type="text" class="form-control username" placeholder="Enter Name" name="username">
						<span class="err_username" style="color: red;font-size: 17px;display: none;">Enter username</span><br>
						<input type="password" name="password" class="form-control pwd" placeholder="Enter password">
						<span class="err_pwd" style="color: red;font-size: 17px;display: none;">Enter password</span><br>

						<center><button class="btn btn-success btn-block" id="login" name="login" type="button"><i class="fa fa-sign-in"></i> Sign in</button>
						<div class="form-group text-center text-white m-2">
							No account yet? <br> <a href="signup.php"><i class="fa fa-user-plus"></i> Sign up</a>
						</div>	
						</center>
						
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
 <script type="text/javascript">
    $('#login').click(function(){
          var username = $('.username').val();
          var pwd = $('.pwd').val();
          if(username!='' && pwd!='')
          { 
            var form = document.getElementById('loginform');
            var data = new FormData(form);
            data.append('login','1');
              $.ajax({
                url:'login1.php',        
                type:'post',
                data: data,
                processData: false,  
                contentType: false ,            
                success:function(result)
                    {
                      // alert(result);die();
                      if(result==1){
                      	alert('You are Loged In.')
                        $('.username').val('');
                        $('.pwd').val('');
                        document.location = 'index.php';
                      }else if(result==2){
                      	$('.error').show();
                      	$('.err_username').hide();
               			$('.err_pwd').hide();
                		$('.username').addClass('err');
                		$('.pwd').addClass('err');

                      }
                    }
                });
          }
          else{
              if(username=='')
              {
                $('.err_username').show();
                $('.username').addClass('err');
              }
              else{
                $('.err_username').hide();
                $('.username').removeClass('err');  
              }
            if(pwd=='')
              {
                $('.err_pwd').show();
                $('#login').css('margin-top', '15px');
                $('.pwd').addClass('err');  
              }
              else{
                $('.err_pwd').hide();
                $('.pwd').removeClass('err');  
              }
          } 
        });
</script>
<?php include'footer.php'; ?> 