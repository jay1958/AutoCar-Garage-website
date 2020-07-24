<?php	
	$title='Service';
	include'header.php'; 
?>
<head>
		 <title>AutoCare Service</title>
 <style>
	
		img {
		border-style: none;
		height: auto;
		max-width: 100%;
		vertical-align: middle;
	}
 </style>
 </head>
	<div class="container">

			
			<div class="row text-justify mt-5">
			<?php $id = $_GET['id'];
				$service = mysqli_query($con, "select * from service where type='$id'");
				$no =1;
				while($row = mysqli_fetch_assoc($service)){
					if($no % 2==0){
			?>
						<div class="col-md-6">
							<img src="image/<?php echo $row['img'] ?>"  class=" img-fluid" height="100px" alt="icon">
						</div>
						
						<div class="col-md-6 ">
							<h5 class="card-title text-center mt-5 m-1"><?php echo $row['name'] ?></h5>
							<p class="card-text"><?php echo $row['disc'] ?></p>
						</div><br/>
							
						<hr/><br>
					<?php }else{ ?>
						<div class="col-md-6">
							<h5 class="card-title text-center mt-5 m-1"><?php echo $row['name'] ?></h5>
							<p class="card-text"><?php echo $row['disc'] ?></p>
						  </div>
						<div class="col-md-6">
							<img src="image/<?php echo $row['img'] ?>" class=" img-fluid" alt="icon">
						</div>
				<?php } //end else
					$no++;
				} //end while ?>
			</div><br>
			<div class="row m-b40">
					<div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
						<img src="Image/car.png" alt="">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 section-head align-self-center">
						 <h5 class="text-uppercase text-center"><span class="text-dan ">Car Service</span></h5>
						<h6 class="font-weight-400">Everything you need to build an amazing dealership website. </h6>
						<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use..</p>
					</div>
					
			</div>
	</div>
<?php include'footer.php'; ?>
