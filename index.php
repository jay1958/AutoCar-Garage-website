<?php 
	$title='Home';
	include'header.php';

 ?>
 <head>
  <title>Autocare Index</title>

 <link rel="stylesheet" href="font\awesome\css\font-awesome.min.css">
 </head>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
		 <?php
		$slider = mysqli_query($con,"select * from slider");
		while($row = mysqli_fetch_assoc($slider)){
	  ?>
		<div class="carousel-item <?php if($row['id']== 1){ echo'active';} ?>">
		  <img src="<?php echo $row['img']; ?>" class="d-block w-100" alt="<?php echo $row['caption']; ?>" title="<?php echo $row['caption']; ?>">
		</div>
		<?php } ?>
	 
		
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	
	<div class="container mt-5 mb-5">
		<div class="row mt-5">
			<div class="col-12 m-5">
				<h2 class="text-center head">Teams</h2>
				<hr/>
			</div>
			<?php
				$teams = mysqli_query($con,"select * from team");
				while($team = mysqli_fetch_assoc($teams)){
			  ?>
			<div class="col-md-3">
				<div class="card" >
				  <img src="Image/<?php echo $team['img']; ?>" class="card-img-top img-fluid" alt="icon">
				  <div class="card-body text-justify">
					<h5 class="card-title text-center"><?php echo $team['name']; ?></h5>
					<p class="card-text"></p>
				  </div>
				</div>
				</div><?php }?>
		</div>
	</div><br/><hr class="bg-dark"/>
	
	<!--service -->
	
	<div class="container">
                <div class="section-head text-center mt-5">
                    <h2 class="text-uppercase head"> OUR SERVICES</h2>
                    
                    <p style= "font-family: 'Merienda', cursive; font-size:15px";>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
				
               <div class="container service1 text-center">
					<div class="row  ">
						<?php
							$services = mysqli_query($con,"select * from service");
							while($service = mysqli_fetch_assoc($services)){
						  ?>
						<div class="col-md-4">
							<img src="image/<?php echo $service['img'];?>" class="mt-3 mb-2" class="img-rounded" alt="Avatar" style="width:250px">
						  <h5><span style="color:#2196f3;"> <?php echo $service['name'];?></h5>
							<?php echo $service['info'];?>
						</div>
						<?php } ?>
					</div>
				</div>
				<br/>
						
	</div>
	
<?php include'footer.php'; ?>

   