<html>
<head>

<title>Upload Image ke Server | KM-ITB </title>
		<link href="css/association.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/half-slider.css" rel="stylesheet">	
		<link href="css/bootstrap.min.css" rel="stylesheet">
</head>		
	
<body>
	 <!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<div class="title">
						<a class="navbar-brand" href="#">Upload Image ke Server</a>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				   </div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

		
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<div class="menu-bar">
						<div class= "logo">
							<img id="logo-img" src="assets/logo.gif"></img>
						</div>
						<div class= "menu">
								<ul class="nav nav-pills">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Event</a></li>
									<li><a href="#">Open Data</a></li>
									<li><a href="#">Kader</a></li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="container">
		<div class="satu">
			<div class="satu-img">
				<img id="026039" src="anigif.gif"></img>
			</div>
		</div>
		</div>
		
		<div class="container">
		<div class="satu">
			<div class="satu-txt">
				<?php
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
						$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						if($check !== false) {
		
							$uploadOk = 1;
							echo "Nama File: " . $_FILES["fileToUpload"]["name"] . "<br>";
							echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br>";
							echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br>";
						} else {
							echo "File is not of the permitted type.";
							$uploadOk = 0;
						}
					}
					// Check if file already exists
					/*if (file_exists($target_file)) {
						echo "Sorry, file already exists.";
						$uploadOk = 0;
					}*/
					// Check file size > 1,5 MB
					if ($_FILES["fileToUpload"]["size"] > 1500000) {
						echo "Sorry, your file is too large.";
						$uploadOk = 0;
					}

					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
						move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
						echo "Photo berhasil di upload ke server.";
					}
				?>
				
			</div>
		</div>
		</div>
		<!-- Page Content -->
		<div class="container">
		<div class="center">
			<div class="social-media">
				<a href='https://www.facebook.com/ITB.KM'><img id="icon-fb" src="assets/home/icon-fb.png"></img></a>
				<a href='http://mail.google.com'><img id="icon-mail" src="assets/home/icon-mail.png"></img></a>
				<a href='https://www.instagram.com/km_itb/'><img id="icon-ig" src="assets/home/icon-ig.png"></img></a>	
			</div>
		</div>
		</div>
		
			<!-- Footer -->
			<footer>
				<div class="row">
					<div class="copyright">
							<p>Sistem dan Teknologi Informasi 2013</p>
						</div>
				</div>
				<!-- /.row -->
			</footer>
		<!-- /.container -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Script to Activate the Carousel -->
		<script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})
		</script>
</body>
</html>
