<div class="header">
	<div class="header_top">
		<div class="wrap">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="menu">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="404.php">Clients</a></li>
					<li><a href="contact.php">Contact</a></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!--start-image-slider---->
	
<?php
//$params = explode ( "/", $_SERVER ( "PHP_SELF" ) );

//if (in_array ( "index.php", $params )) {
	
	if(strpos ($_SERVER["PHP_SELF"],"index.php")>0){	?>
	
	<div class="image-slider">
		<ul class="rslides" id="slider1">
			<li><img src="images/slider3.jpg" alt=""></li>
			<li><img src="images/slider2.jpg" alt=""></li>
			<li><img src="images/slider1.jpg" alt=""></li>
			<li><img src="images/slider4.jpg" alt=""></li>
	
	</div>
	<!--End-image-slider---->
</div>
<?php }?>