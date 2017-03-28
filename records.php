<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EchoRecords</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img alt="Brand" src="img/page1/logo_02.png">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     				<ul class="nav navbar-nav navbar-right topnav-font margin-top-20">
     					<li><a href="#">RECORDS</a></li>
     					<li><a href="#">TV</a></li>
     					<li><a href="#">RADIO</a></li>
     					<li><a href="#"><img src="img/page1/hamburger.png"></a></li>
     				</ul>
     			</div>
			</div>
		</nav>

		<div class="container-fluid records-content">
			<div class="row margin-top-150">
				<div class="col-md-4" >
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4" style=" text-align: center; border-top-left-radius: 6px; border-bottom-left-radius: 6px; background-color: yellow;">
							<br>
							<p class="bold font-size-12 black">PRICE: PKR. 250.00</p>
							<p class="bold" style="font-size:8px;">DELIVERY FEES 50 - 3 DAYS</p>
							<img id="rotate" class="" src="img/page1/disk.png">
							<p class="bold font-size-15 black">BUY NOW</p>
						</div>

						<div class="col-md-6" style="border-top-right-radius: 6px; border-bottom-right-radius: 6px; background-color: white;">
							<br>
							<p class="bold font-size-12 black">VIVA LA VIDA</p>
							<p class="bold font-size-10 black">Coldplay</p>
							<p class="bold font-size-10 black">United Kingdom - 1998</p>
							<div class="list-group" style="font-size:10px;">
								<button type="button" onclick="playPause()"; id="song1" class="list-group-item">Chotay Qadam - Ali Ashraf</button>
								<button type="button" class="list-group-item">Dhoop - Ali Ashraf</button>
								<button type="button" class="list-group-item">Meray Yaar - Ali Ashraf</button>
								<button type="button" class="list-group-item">Paheli - Ali Ashraf</button>
							</div>
							<audio id="file1" style="display:none;" controls>
							  <source src="music/ChotayQadam.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
					</div>
				</div>
				<div class="col-md-8 lineheight-2p5" >
					<p class="font-size-50 bold ">LISTEN TO OUR <span class="yellow">ARTISTS</span></p>
					<p class="font-size-12 bold lineheight-1">LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE. IT IS A GOOD TECHNIQUE IF CLIENT TOO LAZY TO PROVIDE THE ACTUAL CONTENT</p>
					<div class="row">
						<div class="col-md-2"><img style="width:100%;" src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"></div>
					</div>

					<div class="row margin-top-30">
						<div class="col-md-2"><img style="width:100%;" src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"></div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-fixed-bottom">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img style="margin-top: -20px;" alt="Brand" src="img/page1/playlist_player.png">
					</a>
				</div>
     				<ul class="nav navbar-nav navbar-right">
     					<li><a href="#"><img src="img/hamburger.png"></a></li>
     					<li><a href="#"><img src="img/hamburger.png"></a></li>
     					<li><a href="#"><img src="img/hamburger.png"></a></li>
     					<li><a href="#"><img src="img/hamburger.png"></a></li>
     				</ul>
     			</div>
			</div>
		</nav>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
		       function playPause() {
			       var song = document.getElementsByTagName('audio')[0];
			       if (song.paused){
			           song.play();
			       		$("#rotate").addClass("rotate");
			       	}
			       	else{
			           song.pause();
			           $("#rotate").removeClass("rotate");
			       	}
		       }
		</script>
	</body>
</html>