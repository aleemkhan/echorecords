<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EchoRecords</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img alt="Brand" class="enlarge" src="img/page1/logo_02.png">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     				<ul class="nav navbar-nav navbar-right topnav-font margin-top-20">
     					<li><a href="#" class="white stereo">RECORDS</a></li>
     					<li><a href="#" class="white stereo">TV</a></li>
     					<li><a href="#" class="white stereo">RADIO</a></li>
     					<li><a href="#"><img src="img/page1/hamburger.png"></a></li>
     				</ul>
     			</div>
			</div>
		</nav>
		<div id="popup-login" class="popup-login">
			<div id="login1">
				<div class="container-fluid login-content">
					<div class="row margin-top-30 text-center">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<p><img class="enlarge" src="img/page1/logo-01.png"></p>
									<p class="stereo" style="font-size:40px; font-weight: 100px;">END TO END MUSIC</p>
									<p class="stereo" style="font-size:90px; font-weight: 1500px; line-height: 0.5em;">PLATFORM</p>
									<p class="bold stereo">THIS IS THE DUMMY TEXT FOR NOW. WE CAN USE THE RIGHT CONTENT LATER ON. LOREM IPSUM IS TOO MAINSTREAM TEXT TO PUT HERE.</p>
								</div>
							</div>
							
							<div class="row margin-top-30">
								<div class="col-md-3">
									<div class="border-circle">
										<p class="font-size-12">LISTEN TO</p>
										<p class="font-size-25">ORIGINAL</p>
										<p class="font-size-12">MUSIC</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="border-circle">
										<p class="font-size-12">WATCH</p>
										<p class="font-size-25">ECHO TV</p>
										<p class="font-size-12">CONTENT</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="border-circle">
										<p class="font-size-12">GET TO KNOW</p>
										<p class="font-size-25">ARTISTS</p>
										<p class="font-size-12">BETTER</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="border-circle">
										<p class="font-size-12">FREE CONCERT</p>
										<p class="font-size-25">TICKETS</p>
										<p class="font-size-12">FOR SUBSCRIBERS</p>
									</div>
								</div>
							</div>

							<div class="row margin-top-30">
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<button onclick="showform()" type="button" class="btn btn-default btn-lg col-md-12 bolder">LOGIN</button>
								</div>
								<div class="col-md-4">
									<button onclick="showform()" type="button" class="btn btn-default btn-lg col-md-12 bolder">REGISTER</button>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
				</div>

				<nav class="navbar navbar-fixed-bottom">
					<div class="container-fluid">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<div style="position:absolute; margin-top:-80px;">
								<a class="navbar-brand" href="#">
									<img alt="Brand" src="img/page1/playlist_player.png">
								</a>
								<p class="navbar-text margin-top-30">Playlist</p>
							</div>
							<ul class="nav navbar-nav navbar-left">
		     					<li class="lineheight-0p5 font-size-10 bold">
		     						<p>T & C/ PRIVACY</p>
		     						<p>ECHO RECORDS &copy; 2016. ALL RIGHTS RESERVED.</p>
		     					</li>
		     				</ul>
		     				<ul class="nav navbar-nav navbar-right">
		     					<li><a href="#"><img src="img/hamburger.png"></a></li>
		     					<li><a href="#"><img src="img/hamburger.png"></a></li>
		     					<li><a href="#"><img src="img/hamburger.png"></a></li>
		     					<li><a href="#"><img src="img/hamburger.png"></a></li>
		     				</ul>
		     			</div>
					</div>
				</nav>
			</div>

			<div id="login2" style="display: none;">
				<div class="container-fluid login-content">
					<div class="row margin-top-30 text-center">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<p><img src="img/page1/logo-01.png"></p>
								</div>
							</div>
							
							<div class="row margin-top-30">
								<div class="col-md-12" style="background: black; padding-top:10px;">
									<p>PLEASE PROVIDE THE FOLLOWING DETAILS</p>
								</div>
							</div>
							<div class="row" style="background: white; padding-top: 10px; padding-bottom: 20px;">
								<div class="col-md-6">
									<input style="background-color: #eaeaea; margin-top: 5px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="FIRST NAME">
									<input style="background-color: #eaeaea; margin-top: 5px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="LAST NAME">
									<input style="background-color: #eaeaea; margin-top: 5px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="CONTACT NUMBER">
									<input style="background-color: #eaeaea; margin-top: 5px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="CNIV">
									<input style="background-color: #eaeaea; margin-top: 5px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="RESIDENCE ADDRESS">
								</div>
								<div class="col-md-6">
									<input style="background-color: #eaeaea; margin-top: 5px;" type="email" class="form-control" id="exampleInputEmail1" placeholder="EMAIL">
									<input style="background-color: #eaeaea; margin-top: 5px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="USERNAME">
									<input style="background-color: #eaeaea; margin-top: 5px;" type="password" class="form-control" id="exampleInputEmail1" placeholder="PASSWORD">
									<input style="background-color: #eaeaea; margin-top: 5px;" type="password" class="form-control" id="exampleInputEmail1" placeholder="CONFIRM PASSWORD">
									
									<button  onclick="hidePopup()" style="background-color: yellow; border: 1px solid transparent; margin-top: 5px;" type="button" class="btn btn-default col-md-12 bold">SUBSCRIBE</button>
									
								</div>
							</div>
							<div class="row margin-top-30">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="bold" style="width:100%; height: 30px; border-radius: 20px; padding:7px; background: yellow; color:black; font-size:12px;"> SEE SUBSCRIPTION PLANS</div>
								</div>
								<div class="col-md-4"></div>
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
				</div>

				<nav class="navbar navbar-fixed-bottom">
					<div class="container-fluid">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<div style="position:absolute; margin-top:-80px;">
								<a class="navbar-brand" href="#">
									<img alt="Brand" src="img/page1/playlist_player.png">
								</a>
								<p class="navbar-text margin-top-30">Playlist</p>
							</div>
							<ul class="nav navbar-nav navbar-left">
		     					<li class="lineheight-0p5 font-size-10 bold">
		     						<p>T & C/ PRIVACY</p>
		     						<p>ECHO RECORDS &copy; 2016. ALL RIGHTS RESERVED.</p>
		     					</li>
		     				</ul>
		     				<ul class="nav navbar-nav navbar-right">
		     					<li><a href="#"><img src="img/hamburger.png"></a></li>
		     					<li><a href="#"><img src="img/hamburger.png"></a></li>
		     					<li><a href="#"><img src="img/hamburger.png"></a></li>
		     					<li><a href="#"><img src="img/hamburger.png"></a></li>
		     				</ul>
		     			</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="container-fluid home-content">
			<div style="height:100vh; width: 100%; position: absolute; left:0px; overflow: hidden;" id="carousel-home" data-interval="5000" class="carousel slide" data-ride="carousel">
			  <!-- Indicators 
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-tv" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-tv" data-slide-to="1"></li>
			    <li data-target="#carousel-tv" data-slide-to="2"></li>
			    <li data-target="#carousel-tv" data-slide-to="3"></li>
			    <li data-target="#carousel-tv" data-slide-to="4"></li>
			  </ol>
			 -->
			  <div class="carousel-inner" role="listbox">
			    <div style="margin-top: -62px;" class="item active margintop-60">
			      <img src="img/page1/bg_artist_01.png" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div style="margin-top: -62px;" class="item margintop-60">
			      <img src="img/page1/bg_albumpage_01.png" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
		
			  </div>

			  
			</div>
			<div class="row margin-top-150">
				<div class="col-md-1 lineheight-2p5" ></div>
				<div class="col-md-9 lineheight-2p5" >
					<p class="font-size-50 bold yellow stereo">END TO END MUSIC</p>
					<p class="font-size-70 bold yellow stereo">PLATFORM</p>
					<p class="font-size-20 bold lineheight-1 stereo">LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL<BR> THE SPACE. IT IS A GOOD TECHNIQUE IF CLIENT TOO<br> LAZY TO PROVIDE THE ACTUAL CONTENT</p>
				</div>
				<div class="col-md-2 lineheight-0p5">
					<p class="bold">FEATURED</p>
					<p class="font-size-30 bold">ALBUM</p>
					<img class="enlarge" src="img/page1/featured-album.png">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" ></div>
				<div class="col-md-6" style="padding-top:50px;">
					<img class="enlarge" src="img/page1/logo_main.png">
				</div>
				<div class="col-md-3" style="padding-left: 75px; padding-top: 75px;">
					<img class="enlarge" src="img/page1/jam-of-month.png">
				</div>
			</div>
		</div>


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
							<p><a href="#">Share This <img src="img/page1/share-this.png"></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-8 lineheight-2p5" >
					<p class="font-size-50 bold  stereo">LISTEN TO OUR <span class="yellow">ARTISTS</span></p>
					<p class="font-size-12 bold lineheight-1 stereo">LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE. IT IS A GOOD TECHNIQUE IF CLIENT TOO LAZY TO PROVIDE THE ACTUAL CONTENT</p>
					<div class="row">
						<div class="col-md-3"><img class="enlarge" style="width:100%;" src="img/page1/album1.jpg"></div>
						<div class="col-md-3"><img class="enlarge" style="width:100%;"  src="img/page1/album2.jpg"></div>
						<div class="col-md-3"><img class="enlarge" style="width:100%;"  src="img/page1/album3.jpg"></div>
						<div class="col-md-3"><img class="enlarge" style="width:100%;"  src="img/page1/album4.jpg"></div>
					</div>

					<!--div class="row margin-top-30">
						<div class="col-md-2"><img style="width:100%;" src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"><img style="width:100%;"  src="img/page1/01-album-thumb.jpg"></div>
						<div class="col-md-2"></div>
						<div class="col-md-2"></div>
					</div-->
				</div>
			</div>
		</div>


		<div class="container-fluid tv-content" style="overflow: hidden;">

			<div class="popup-tv" id="popup-tv" style="position: fixed; top:0px; left:0px; width: 100%; height: 100%; z-index: 50000; overflow: hidden; background: black; display: none;"></div>

			<div style="height:100vh; width: 100%; position: absolute; left:0px; overflow: hidden;" id="carousel-tv" data-interval="false" class="carousel slide" data-ride="carousel">
			  <!-- Indicators 
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-tv" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-tv" data-slide-to="1"></li>
			    <li data-target="#carousel-tv" data-slide-to="2"></li>
			    <li data-target="#carousel-tv" data-slide-to="3"></li>
			    <li data-target="#carousel-tv" data-slide-to="4"></li>
			  </ol>
			 -->
			  <div class="carousel-inner" role="listbox">
			    <div style="margin-top: -62px;" class="item active margintop-60">
			      <img src="img/page1/bg_erf_01.png" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div style="margin-top: -62px;" class="item margintop-60">
			      <img src="img/page1/tvbg1.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div style="margin-top: -62px;" class="item margintop-60">
			      <img src="img/page1/tvbg2.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div style="margin-top: -62px;" class="item margintop-60">
			      <img src="img/page1/tvbg3.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div style="margin-top: -62px;" class="item margintop-60">
			      <img src="img/page1/tvbg4.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			  </div>

			  
			</div>
			<div class="row margin-top-150">
				<div class="col-md-8">

					<div class="row margin-top-30">
						<div class="col-md-8"></div>
						<div class="col-md-4 text-center">
							<img onclick="playThisVideo()" class="enlarge" style="width:50%;" src="img/page1/play_btn.png">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 lineheight-1">
							<p class="font-size-30 bold stereo ">WATCH THE HIGHLIGHTS <span class="yellow">#ERF16</span></p>
							<p class="font-size-70 bold lineheight-1 yellow stereo">ECHO ROCK FEST 2016</p>
							<p class="font-size-15 lineheight-1p5 stereo">
								LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE. IT IS A GOOD TECHNIQUE IF CLIENT TOO LAZY TO PROVIDE THE ACTUAL CONTENT. LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-4">
							<img class="enlarge" onclick="changeTvChannel(0)" data-target="#carousel-tv" data-slide-to="1" style="width:100%;" src="img/page1/tv1.png">
						</div>
						<div class="col-md-4">
							<img class="enlarge" onclick="changeTvChannel(1)" data-target="#carousel-tv" data-slide-to="2" style="width:100%;"  src="img/page1/tv2.png">
						</div>
						<div class="col-md-4">
							<img class="enlarge" onclick="changeTvChannel(2)" data-target="#carousel-tv" data-slide-to="3" style="width:100%;"  src="img/page1/tv3.png">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<img class="enlarge" onclick="changeTvChannel(3)" data-target="#carousel-tv" data-slide-to="4" style="width:100%;" src="img/page1/tv4.png">
						</div>
					</div>
				</div>
			</div>

		</div>



		<div class="container-fluid radio-content">
			<div style="height:100vh; width: 100%; position: absolute; left:0px; overflow: hidden;" id="carousel-radio" data-interval="false" class="carousel slide" data-ride="carousel">
			  <!-- Indicators 
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-tv" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-tv" data-slide-to="1"></li>
			    <li data-target="#carousel-tv" data-slide-to="2"></li>
			    <li data-target="#carousel-tv" data-slide-to="3"></li>
			    <li data-target="#carousel-tv" data-slide-to="4"></li>
			  </ol>
			 -->
			  <div class="carousel-inner" role="listbox">
			    <div style="margin-top: -62px;" class="item active margintop-60">
			      <img src="img/page1/bg_radio_01.png" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div style="margin-top: -62px;" class="item margintop-60">
			      <img src="img/page1/tvbg1.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div style="margin-top: -62px;" class="item margintop-60">
			      <img src="img/page1/tvbg2.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div style="margin-top: -62px;" class="item margintop-60">
			      <img src="img/page1/tvbg3.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div style="margin-top: -62px;" class="item margintop-60">
			      <img src="img/page1/tvbg4.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			  </div>

			  
			</div>
			<div class="row margin-top-150">
				
				<div class="col-md-8 lineheight-2p5" >
					<p class="font-size-50 bold stereo">LISTEN TO OUR <span class="yellow">SHOWS</span></p>
					<p class="font-size-10 bold lineheight-1p5 stereo">LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE. IT IS A GOOD TECHNIQUE IF CLIENT TOO LAZY TO PROVIDE THE ACTUAL CONTENT. LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE. IT IS A GOOD TECHNIQUE IF CLIENT TOO LAZY TO PROVIDE THE ACTUAL CONTENT. LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE. IT IS A GOOD TECHNIQUE IF CLIENT TOO LAZY TO PROVIDE THE ACTUAL CONTENT</p>
					
					<p class="font-size-12 bold lineheight-1p5 stereo">LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE. IT IS A GOOD TECHNIQUE IF CLIENT TOO LAZY TO PROVIDE THE ACTUAL CONTENT.</p>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-2">
							<img class="enlarge" data-target="#carousel-radio" data-slide-to="0" style="width:100%;" src="img/page1/radio1.png">
						</div>
						<div class="col-md-2">
							<img class="enlarge" data-target="#carousel-radio" data-slide-to="1" style="width:100%;" src="img/page1/tv1.png">
						</div>
						<div class="col-md-2">
							<img class="enlarge" data-target="#carousel-radio" data-slide-to="2" style="width:100%;" src="img/page1/tv2.png">
						</div>
						<div class="col-md-2">
							<img class="enlarge" data-target="#carousel-radio" data-slide-to="3" style="width:100%;" src="img/page1/tv3.png">
						</div>
						<div class="col-md-2">
							<img class="enlarge" data-target="#carousel-radio" data-slide-to="4" style="width:100%;" src="img/page1/tv4.png">
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="col-md-4" >
					<div class="row">
						<div class="col-md-5" style=" text-align: center; border-top-left-radius: 6px; border-bottom-left-radius: 6px; background-color: yellow;">
							<br>
							<p class="bold font-size-12 black stereo">CHOOSE A GENRE</p>
							<p class="bold" style="font-size:8px; stereo">AND START LISTENING</p>
							<img id="rotate" class="" src="img/page1/radio-logo-01.png">
							<p class="bold font-size-15 black stereo">ECHO RADIO</p>
						</div>

						<div class="col-md-6" style="border-top-right-radius: 6px; border-bottom-right-radius: 6px; background-color: white;">
							<br>
							<p class="bold font-size-12 black">VIVA LA VIDA</p>
							<p class="bold font-size-10 black">Coldplay</p>
							<p class="bold font-size-10 black lineheight-1">United Kingdom - 1998</p>
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
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-fixed-bottom">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
     					<li class="lineheight-0p5 font-size-10 bold">
     						<p>T & C/ PRIVACY</p>
     						<p>ECHO RECORDS &copy; 2016. ALL RIGHTS RESERVED.</p>
     					</li>
     				</ul>
     				<ul class="nav navbar-nav navbar-right">
     					<li><a href="#"><i class="fa fa-twitter font-size-20 white"></i></a></li>
     					<li><a href="#"><i class="fa fa-facebook font-size-20 white"></i></a></li>
     					<li><a href="#"><i class="fa fa-youtube font-size-20 white"></i></a></li>
     					<li><a href="#"><i class="fa fa-instagram font-size-20 white"></i></a></li>
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

			function showform(){
					$("#login1").hide();
					$("#login2").show(500);
			}

			function hidePopup(){
					$("#popup-login").hide(500);
			}


			/////// TV STARTS
			var currentTv = 0;

			var channelVideos = ['zLNSIMcDjXA', 'yd-ksSJ2E4Q', 'zLNSIMcDjXA', 'FYkDwd15KNQ'];

			function changeTvChannel(e){
				currentTv = e;
			}

			function hideAndClose(){
				$('#popup-tv').html(''); 
				$('#popup-tv').hide(400);
			}

			function playThisVideo(){
				var html = '<a onclick="hideAndClose()" href="#" style="position:absolute; right:10px; top:10px; color:white; z-index: 1000000000"><span style="font-size:30px;" class="glyphicon glyphicon-remove"></span></a>';
					html += '<iframe id="iframe-'+ channelVideos[currentTv] +'" class="youtube-iframe" type="text/html" src="https://www.youtube.com/embed/'+ channelVideos[currentTv] +'?rel=0&amp;controls=0&amp;showinfo=0&amp;modestbranding=1&amp;enablejsapi=1&autoplay=1" frameborder="0" style="width: 100%;height: 100%;left: 0px; margin-top: -0px;"></iframe>';

					$("#popup-tv").html(html);
					$("#popup-tv").show();
			} 
		</script>
	</body>
</html>