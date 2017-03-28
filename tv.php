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
							<img onclick="playThisVideo()" style="width:50%;" src="img/page1/play_btn.png">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 lineheight-1">
							<p class="font-size-30 bold ">WATCH THE HIGHLIGHTS <span class="yellow">#ERF16</span></p>
							<p class="font-size-70 bold lineheight-1 yellow">ECHO ROCK FEST 2016</p>
							<p class="font-size-15 lineheight-1p5">
								LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE. IT IS A GOOD TECHNIQUE IF CLIENT TOO LAZY TO PROVIDE THE ACTUAL CONTENT. LOREM IPSUM IS A DEMO TEXT THAT IS USED TO FILL THE SPACE.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-4">
							<img onclick="changeTvChannel(0)" data-target="#carousel-tv" data-slide-to="1" style="width:100%;" src="img/page1/tv1.png">
						</div>
						<div class="col-md-4">
							<img onclick="changeTvChannel(1)" data-target="#carousel-tv" data-slide-to="2" style="width:100%;"  src="img/page1/tv2.png">
						</div>
						<div class="col-md-4">
							<img onclick="changeTvChannel(2)" data-target="#carousel-tv" data-slide-to="3" style="width:100%;"  src="img/page1/tv3.png">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<img onclick="changeTvChannel(3)" data-target="#carousel-tv" data-slide-to="4" style="width:100%;" src="img/page1/tv4.png">
						</div>
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
		<script>
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