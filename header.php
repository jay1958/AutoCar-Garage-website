<?php
	require 'connect.php';
	 session_start();
  // print_r($_SESSION['user']);
	
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="font\awesome\css\font-awesome.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/login2.css">
    <link rel="stylesheet" href="css/style.css">

   
	
  </head>
  <body>
	<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
		
			  <a class="navbar-brand img-rounded mx-auto" href="index.php"><img src="Image/logo5.png" alt="Cars" width="150px"></a>
		
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
				
			  <div class="collapse navbar-collapse "  id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
		
			  <li class="nav-item <?php if($title == 'Home') { echo 'active'; } ?>">
				<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
			  </li>
			  
			  <li class="nav-item dropdown <?php if($title == 'Service') { echo 'active'; } ?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  SERVICES
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="service.php?id=<?php echo '1'; ?>">Engine diagnostics</a>
				  <a class="dropdown-item" href="service.php?id=<?php echo '2'; ?>">Lube Oil And Filter</a>
				  <a class="dropdown-item" href="service.php?id=<?php echo '3'; ?>">Air Conditioning</a>
				  <a class="dropdown-item" href="service.php?id=<?php echo '4'; ?>">Body Repair</a>
				  <a class="dropdown-item" href="service.php?id=<?php echo '5'; ?>">wheel Services</a>
				  
			  </li>
			  <li class="nav-item <?php if($title == 'About Us') { echo 'active'; } ?>">
				<a class="nav-link" href="about.php">ABOUT</a>
			  </li>
			  <li class="nav-item <?php if($title == 'GALLERY') { echo 'active'; } ?>">
				<a class="nav-link " href="gallery.php">GALLERY</a>
			  </li>
			  <li class="nav-item <?php if($title == 'CONTACT') { echo 'active'; } ?>">
				<a class="nav-link " href="contact.php">CONTACT</a>
			  </li>
			  <li class="nav-item">
            	<?php if(isset($_SESSION['user'])){ ?>
              <div class="dropdown">
                  <a class="nav-link dropbtn dropdown-toggle"><?php echo $_SESSION['user']['name']; ?></a>
                  <div class="dropdown-content">
                    <a href="logout.php">LOGOUT</a>
                  </div>
              </div>
                <a class="nav-link <?php if($title == 'Login US || Sign up') { echo 'active'; } ?> " href="login1.php"></a>
            	<?php }else{ ?>
                <a class="nav-link <?php if($title == 'Login US || Sign up') { echo 'active'; } ?> " href="login1.php">LOGIN US</a>
            	<?php } ?>
          	  </li>
			 </ul>

	  </div><!-- end container-->
	</nav>
  </body>
 </html>
 