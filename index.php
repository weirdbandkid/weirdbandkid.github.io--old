<?php
 	include("config.php");

 	function checkStatus($ip, $port, $manual) {
		if ($manual == "0") {
	 		$fp = fsockopen($ip, $port, $errornum, $errorstr, 1);
			if (!$fp) {
	    		echo '<div class="right indicator offline">Offline <i class="fas fa-battery-empty"></i></div>';
			}
		 
			elseif ($fp) {
				echo '<div class="right indicator online">Operational <i class="fas fa-battery-full"></i></div>';
			}
		}

 		elseif ($manual == "1" or "2" or "3") {
 			if ($manual == "1") {
 				echo '<div class="right indicator online">Operational <i class="fas fa-battery-full"></i></div>';
 			}

 			elseif ($manual == "2") {
 				echo '<div class="right indicator issues">Issues <i class="fas fa-battery-half"></i></div>';
 			}

 			elseif ($manual == "3") {
 				echo '<div class="right indicator offline">Offline <i class="fas fa-battery-empty"></i></div>';
 			}
 		}
 	}
?><!DOCTYPE html>
<html>
<head>
	<title>Status - <?php echo $name ?></title>
	<link rel="icon" type="image/png" href="<?php echo $logo ?>" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-0c38nfCMzF8w8DBI+9nTWzApOpr1z0WuyswL4y6x/2ZTtmj/Ki5TedKeUcFusC/k" crossorigin="anonymous">
	<meta name="theme-color" content="#084793">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:creator" content="@jekeltor" />
	<meta property="og:url" content="https://gfnrp.us" />
	<meta property="og:title" content="<?php echo $name ?>" />
	<meta property="og:description" content="<?php echo $description ?>" />
	<meta property="og:image" content="<?php echo $logo ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
	<script>
	  	window.onload = function() { 
	  		setTimeout(function(){ var loader = document.getElementById('loader');
	  		loader.classList.add("none"); }, 2000);
	  	}
	</script>
	<style>
		body {
			height: 100vh;
			width: 100%;
			overflow: hidden;
			margin: 0;
			background-color: rgb(39, 43, 48);
			font-family: 'Inria Sans', sans-serif;
		}

		.loader {
			height: 100vh;
			width: 100%;
			background-color: <?php echo $colorhex ?>;
			position: absolute;
			z-index: 10;
		}

		.loader .loading {
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 99;
		}

		.loader .loading:after {
		  	content: "";
		  	width: 8vh;
		  	height: 8vh;
		  	position: absolute;
		  	top: -30px;
		  	right: 0;
		  	left: 0;
		  	bottom: 0;
		  	margin: auto;
		  	border: 1vh solid #fff;
		  	border-top: 1vh dotted #fff;
		  	border-bottom: 1vh dotted #fff;
		  	border-radius: 50%;
		  	animation: loading 2s infinite;
		}

		.none {
			animation: .25s ease-in 0s 1 preloader;
			animation-fill-mode: forwards;
		}

		.body {
			display: flex;
			height: 90vh;
			width: 100%;
			background-size: cover;
			background-repeat: no-repeat;
			position: absolute;
			z-index: 1;
			align-items: center;
			justify-content: center;
			overflow: hidden;
		}

		.body .announcementspacer {
			width: 44vw;
		}

		.body .announcement {
			z-index: 3;
			width: 44vw;
			padding-top: 1.5vh;
			padding-bottom: 1.5vh;
			font-size: 1.75vh;
			color: #fff;
			background-color: <?php echo $colorhex ?>;
			border-radius: 1vh;
			text-align: center;
		}

		.body .announcement h1 {
			font-size: 2.5vh;
			margin: 0;
			margin-bottom: 1vh;
		}

		.body .announcement p {
			font-size: 1.75vh;
			margin: 0;
		}

		.body .screen {
			display: flex;
			height: 90vh;
			width: 100%;
			position: absolute;
			z-index: 2;
			background-image: linear-gradient(rgba(<?php echo $colorrgb ?>, .5), rgba(39, 43, 48, 1));
			align-items: center;
			justify-content: center;
			text-align: center;
		}

		.body .screen .spacer {
			display: flex;
			margin-top: 5vh;
			min-height: 50vh;
			min-width: 40vw;
			padding: 5vh 2%;
			background-color: rgba(255, 255, 255, .2);
			align-items: center;
			justify-content: center;
		}

		.body .screen .spacer .center {
			width: 100%;
		}

		.body .screen .spacer .center h1 {
			font-size: 3vh;
			color: #fff;
			margin: 0;
			margin-bottom: 2vh;
		}

		.body .screen .spacer .center .item {
			display: flex;
			font-size: 1.75vh;
			width: 85%;
			margin-left: 5.5%;
			color: #fff;
			border-radius: 5vh;
			padding: 2vh 2%;
			align-items: center;
			justify-content: center;
			margin-bottom: 2vh;
		}

		.body .screen .spacer .center .item .left {
			width: 25%;
			margin-left: 2.5%;
			margin-right: 22.5%;
			text-align: center;
		}

		.body .screen .spacer .center .item .right {
			width: 25%;
			margin-left: 22.5%;
			margin-right: 2.5%;
			text-align: center;
		}

		@keyframes preloader {
			0% {
				visibility: visible;
				opacity: 1;
			}

			99% {
				visibility: hidden;
				opacity: 0;
				height: 100vh;
				width: 100%;
			}

			100% {
				height: 0vh;
				width: 0%;
				opacity: 0;
				display: none;
				z-index: -5;
			}
		}

		@keyframes loading {
		  	0% {
		    	transform: rotate(0);
		  	}

		  	50% {
		    	transform: rotate(360deg);
		  	}
		}

		@media screen and (max-width: 600px), (orientation : portrait) {
			.body .announcementspacer {
				width: 94vw;
			}

			.body .announcement {
				width: 94vw;
			}

			.body .screen .spacer {
				min-width: 90vw;
			}

			.body .screen .spacer .center .item {
				margin-left: 5.5%;
			}
		} 
	</style>
</head>
<section class="loader" id="loader">
	<div class="loading">
	</div>
</section>
<body>
	<section class="body">
	  	<div class="screen">
	  		<div class="announcementspacer">
	  		<?php
				if ($announcement == "") {
				}

				elseif ($announcement !== "") {
			?>
				<div class="announcement">
					<h1>Notification</h1>
					<p><?php echo $announcement ?></p>
				</div>
			<?php } ?>
		  		<div class="spacer">
		  			<div class="center">
			  			<h1>Server Status</h1>
			  			<?php
			  				foreach ($servers as $name => $information) {
			  			?>
			  				<div class="item">
			  					<div class="left"><?php echo $name ?></div>
			  					<?php checkStatus($information['IP'], $information['port'], $information['status']) ?>
			  				</div>
			  			<?php }?>
			  		</div>
		  		</div>
	  		</div>
	  	</div>
	</section>
	<script>
		function copyText(e) {
		  	var textToCopy = document.querySelector(e);
		  	var textBox = document.querySelector(".clipboard");
		  	var changetext = document.getElementById("change");

		  	textBox.setAttribute('value', textToCopy.innerHTML);

		  	textBox.select();
		  	document.execCommand('copy');
		  	changetext.innerHTML = "IP copied";
  			setTimeout(function(){ 
  				changetext.innerHTML = "Click to copy IP";
  			}, 3000);
		}

		function dropDown() {
			var dropdown = document.getElementById("dropdown");
			var dropdownbtn = document.getElementById("dropdownbtn");
			var navbar = document.getElementById("navbar");
			var navbarleft = document.getElementById("navbarleft");

			dropdown.classList.toggle("dropdownshow");
			navbar.classList.toggle("navbarhidden");
			navbarleft.classList.toggle("navbarlefthidden");
			
			if (dropdown.classList.contains("dropdownshow")) {
				dropdownbtn.innerHTML = "<i class='fas fa-times'></i>";
			}

			else {
				dropdownbtn.innerHTML = "<i class='fas fa-bars'></i>";
			}
		}

		function checkStatus() {
			var servers = document.getElementsByClassName("item");
			for (var i = 0; i < servers.length; ++i) {
				var server = servers[i];
				if (server.innerHTML.includes("indicator online")) {
					server.style.backgroundColor = "#1ea100";
				}

				else if (server.innerHTML.includes("indicator offline")) {
					server.style.backgroundColor = "#cf0000";
				}

				else if (server.innerHTML.includes("indicator issues")) {
					server.style.backgroundColor = "#ff8400";
				}
			}
		}

		checkStatus();
	</script>
</body>
</html>