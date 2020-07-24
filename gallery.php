<?php	
	$title='Gallery'; 
	include'header.php';
?>
<head>
		 <title>AutoCare Gallery</title>
		<style type="text/css"> 
		body{
		  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
		  height:auto;
		}
		
		
		</style>
	</head>
    <br><br><h1 class="text-center text-info mt-5"></h1><br>
	<div class="container">
		<div class="row gallery_img">
			<?php
				$gallary = mysqli_query($con,"select * from gallary ");
				while($gall = mysqli_fetch_assoc($gallary)){
			  ?>
			<div class="col-md-4 col-sm-4 ">
				<a href="<?php echo $gall['img']; ?>" data-lightbox="image-1" data-title="AUTOCAR GARAGE">
					<img src="<?php echo $gall['img']; ?>" class="img-fluid">
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php include'footer.php'; ?>

