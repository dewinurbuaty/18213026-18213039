<html>
<head>

<title>Hasil Image Manipulator | KM-ITB </title>
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
						<a class="navbar-brand" href="#">Hasil Image Manipulator</a>
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
			<div class="container">
				<div class="satu">
					<div class="satu-txt">
					<?php 
						$target_dir = "uploads/";
						$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);						
						$uploadOk = 1;
						$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
					?>
					
					<?php
					
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
							if($check !== false) {
								//echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
								echo "<br><b>BEFORE:</b>";
								echo "<br>Nama File: " . $_FILES["fileToUpload"]["name"]. "<br>";								
								echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br>";
								//echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br>";
								echo "Panjang (heigth): " . getimagesize($target_dir.basename($_FILES["fileToUpload"]["name"]))[1] . "<br>";
								echo "Lebar(width): " . getimagesize($target_file)[0] . "<br>";							
								echo '<img src="' . $target_file . '">' . "<br>";
								
							} else {
								echo "File is not of the permitted type.";
								$uploadOk = 0;
							}
						}
					?>
					</div>
				</div>
			</div>
		
		
			<?php
	
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
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					$file = $target_file;
			?>
			
			
			
			<?php
			include"image_resize.php";
				// *** 1) Initialize / load image
				$resizeObj = new resize($_FILES["fileToUpload"]["name"], $target_dir);
				
				// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
				$resizeObj -> resizeImage($_POST["lebar"], $_POST["panjang"], $_POST["pilihan"]);
					 
				// *** 3) Save image
				$simpandi = "uploads/edits/";
				$resizeObj -> saveImage($simpandi.$_POST["namaFile"] . '.' . $_POST["generate"], 100);	
				$newFileCrop = $simpandi.$_POST["namaFile"] . "." . $_POST["generate"];
			?>
			
		
				<div class="container">
					<div class="satu">
						<div class="satu-txt">
						
						<?php
							echo "<br><b>AFTER:</b></br>";
							echo "Nama File: " . $_POST["namaFile"] . "." . $_POST["generate"]."<br>";
							echo "Type: image/" . $_POST["generate"]. "<br>";
							//echo "Size: " . ($getimagesize($newFileCorp) / 1024) . " Kb<br>";
							echo "Panjang (heigth): " . getimagesize($newFileCrop)[1] . "<br>";
							echo "Lebar(width): " . getimagesize($newFileCrop)[0] . "<br>";						
							echo '<img src="' . $newFileCrop . '">' . "<br>";
							echo "Photo berhasil dimanipulasi!<br> Untuk download, silakan klik kanan pada gambar dan pilih 'Save Image As'";
							//<input type="button" value="Download Image" onclick="window.location.href'http://uploads/c.jpg'">
						?>
		
						
						</div>
					</div>
				</div>
					<center>	
					</center>
					
					<?php								
					
				} 
				else{
					echo "Sorry, there was an error uploading your file.";
				}
			 
			}
			?>			
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
