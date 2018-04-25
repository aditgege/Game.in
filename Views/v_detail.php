<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Game.in | Berita</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/product.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/album.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/searchbox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/button.css">
</head>
<body style="background-color: #f5f5f5;padding-bottom:0px !important;">
<nav class="navbar box-shadow navbar-dark navbar-expand-md bg-faded fixed-top " style="background-color: #373435;">
    <a href="/" class="navbar-brand" style="background-color:#373435;"><img  class="logo" src="assets/gambar/logo.png" ></a>
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
      
      <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="index.php">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="esport.php">E-Sport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        </ul>
        <div href="" class="navbar-brand src-bg" style="background-color:yellow;">
                  <img class="src" src="assets/gambar/src.png" style="height: 20px;">
           </div>
      </div>
   
  </nav>
  <div class="contain" style="padding: 50px; padding-top: 100px;">
  	
	<div class="row" style="width: 100%; margin: 0px;">
        <div class="card col-md-8" style="padding: 0; ">
          <img class="card-img-top mainImg" src="assets/gambar/g1.jpg">
	          	<div class="card-body bg-dark" style="height: 150px; padding: 20px;">
	    				<p class="card-title h3 text-left text-warning titleImg" style=" "><?=  $result['judul']?></p>
	            </div>
		  		<div class="card-body" style="padding: 50px">
		  			<p><?=  $result['isi_berita']?></p>

		  			<div class="row">
		  				<hr style="background-color: black; width: 70%; height: 1px; ">
		  				<hr style="background-color: yellow; width: 30%; height: 1px; ">
		  			</div>
		  			<h5>RELATED ARTICLE</h5>
		  			<div class="row">
		  				<div class="col-md-4">
		  					<div class="card box-shadow">
		  						<img class="card-img-top" src="assets/gambar/g1.jpg">
		  						<div class="card-body">
		  							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		  						</div>
		  					</div>
		  				</div>
		  				<div class="col-md-4">
		  					<div class="card box-shadow">
		  						<img class="card-img-top" src="assets/gambar/g2.jpg">
		  						<div class="card-body">
		  							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		  						</div>
		  					</div>
		  				</div>
		  				<div class="col-md-4">
		  					<div class="card box-shadow">
		  						<img class="card-img-top" src="assets/gambar/g3.jpg">
		  						<div class="card-body">
		  							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		  						</div>
		  					</div>
		  				</div>
		  			</div>
		  		</div>
        </div>
        <div class="card col-md-4" style="margin-left: 0px; border-radius: 0px;padding: 20px; padding-top: 30px;">
        	<h5>NEWEST ARTICLE</h5>
        	<div class="row">
		  		<hr style="background-color: black; width: 70%; height: 1px; ">
		  		<hr style="background-color: yellow; width: 30%; height: 1px; ">
		  	</div>
              <div class="card mb-5 box-shadow">
                <img class="card-img-top imgThumbnail" style="" src="assets/gambar/g3.jpg" data-holder-rendered="true">
                <div class="card-img-overlay cardOverlay" style="">
                  <p class="card-text text-white titleImg" style=" ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>

              <div class="card mb-5 box-shadow">
                <img class="card-img-top imgThumbnail" style="" src="assets/gambar/g2.jpg" data-holder-rendered="true">
                <div class="card-img-overlay cardOverlay" style="">
                  <p class="card-text text-white titleImg" style="">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
          </div>

              <div class="card mb-4 box-shadow">
                <img class="card-img-top imgThumbnail" style="" src="assets/gambar/g1.jpg" data-holder-rendered="true">
                <div class="card-img-overlay cardOverlay" style="">
                  <p class="card-text text-white titleImg" style="">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <h5>SEE OTHER ></h5>
            </div>
      </div>
    </div>
<footer class="" style="background-color: #373435; height: 20px ;">
        <div class="text-center">
          
          <p>&copy; 2017-2018 Company, Inc. &middot; <a style="color:yellow !important" href="#">Privacy</a> &middot; <a href="#" style="color:yellow !important">Terms</a></p>
        </div>
        
      </footer>
</body>
</html>