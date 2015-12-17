<html>
<head>

<title>Hasil Image Manipulator | KM-ITB </title>
		<link href="/css/association.css" rel="stylesheet">
		<link href="/css/bootstrap.css" rel="stylesheet">
		<link href="/css/half-slider.css" rel="stylesheet">	
		<link href="/css/bootstrap.min.css" rel="stylesheet">
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
							<img id="logo-img" src="/assets/logo.gif"></img>
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
				<img id="026039" src="/Progif/anigif.gif"></img>
			</div>
		</div>
		</div>
		
		<div class="container">
			<div class="satu">
			<div class="satu-txt">
				
				<?php
				// *** Include the class
				include"image_resize.php"; 
					if (isset($_GET["action"])) {
						// *** 1) Initialize / load image
						$thisFile = $_GET["path"];
						$direct = $_GET["dir"];
						$resizeObj = new resize($thisFile, $direct . "/");
						switch ($_GET["action"]) {
							case "exact" :
								if(isset($_GET["lebar"]) && isset($_GET["panjang"])){
								// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
								$resizeObj -> resizeImage($_GET["lebar"], $_GET["panjang"], 'exact');
								}							
							break;
							
							case "auto" :
								if(isset($_GET["lebar"]) && isset($_GET["panjang"])){
								// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
								$resizeObj -> resizeImage($_GET["lebar"], $_GET["panjang"], 'auto');
								}
							break;
							
							case "crop" :
								if(isset($_GET["lebar"]) && isset($_GET["panjang"])){
								// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
								$resizeObj -> resizeImage($_GET["lebar"], $_GET["panjang"], 'crop');
								}
							break;
								}
							// *** 3) Save image
								//$simpandi = "uploads/edits/";
								//$resizeObj -> saveImage($simpandi.$_POST["namaFile"] . '.' . $_POST["generate"], 100);	
								//$newFileCrop = $simpandi.$_POST["namaFile"] . "." . $_POST["generate"];
								
								$resizeObj -> saveImage('newCrop.' . $_GET["type"], 100);
								$new = "Progif/newCrop." . $_GET["type"];
								
								//SEBELUM DIEDIT
								echo "<br><b>BEFORE:</b>";
								echo "<br>Nama File:".$_GET["path"]."<br>";								
								echo "Type: image/" .$_GET["eks"]. "<br>";
								//echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br>";						
								$a="uploads/".$_GET["path"];
								echo "Panjang (heigth): " . getimagesize($a)[1] . "<br>";
								echo "Lebar(width): " . getimagesize($a)[0] . "<br>";								
								$x="/Progif/uploads/".$_GET["path"];
								echo '<img src="' . $x. '">' . "<br>";
								
								//SETELAH DIEDIT
								echo "<br><b>AFTER:</b>";
								echo "<br>Nama File: newCrop.".$_GET["type"]."<br>";								
								echo "Type: image/" .$_GET["type"]. "<br>";
								//echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br>";						
								$a="newCrop." . $_GET["type"];
								echo "Panjang (heigth): " . getimagesize($a)[1] . "<br>";
								echo "Lebar(width): " . getimagesize($a)[0] . "<br>";
								$new= "/Progif/newCrop." . $_GET["type"];
								echo '<img src="' . $new. '">' . "<br>";
								echo "Photo berhasil dimanipulasi!<br> Untuk download, silakan klik kanan pada gambar dan pilih 'Save Image As'";
					
				} 
				else{
					echo "Sorry, there was an error uploading your file.";
				}
			?>			
		</div>
			</div>
					</div>
				</div>
						
					
<!-- Page Content -->
    <div class="container">
	<div class="center">
		<div class="social-media">
			<a href='https://www.facebook.com/ITB.KM'><img id="icon-fb" src="/assets/home/icon-fb.png"></img></a>
			<a href='http://mail.google.com'><img id="icon-mail" src="/assets/home/icon-mail.png"></img></a>
			<a href='https://www.instagram.com/km_itb/'><img id="icon-ig" src="/assets/home/icon-ig.png"></img></a>	
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
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>

