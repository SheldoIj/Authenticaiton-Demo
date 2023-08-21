<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Semester Project</title>
        <link rel="stylesheet" href="AutographVerify.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="wrapper">
			<header>
				<div id="nameTemplate">
					<?php
    					if (isset($_COOKIE["user"])) {
    						echo "Welcome " . $_COOKIE["user"];
    						echo ' <a id="logout" href="logout.php">Logout</a>';
    					} else {
    						echo '<a id="login" href="login.php">Login</a>';
    					}
					?>
				</div>
				<!--<a id="logout" href="logout.php">Logout</a>-->

				
				<h1 id="logo"><a href="index.php"><img src="https://images.horrorhound.com/hh2017/layout/HORRORHOUND-white-black-flat-sm.png" alt="Logo" width=200></a></h1>
			</header>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="shop.php">Shop</a></li>
				</ul>
			</nav>
			<main>
				<p>
					Interested in Getting your memorabilia authenticated?
					This can raise the value of the item significantly and is always worth getting
					as not only will it raise the value of the item, but it will make the item much easier to sell! At all HorrorHound Weekend conventions, outside the celebrity hall,
					you will have the opportunity to have your items authenticated and verified. Which can be accessed virtually anytime.
				</p>
				<h3> Autographed items you can authenticate: </h3>
				<ul>
					<li>Photos</li>
					<li>Photo-ops</li>
					<li>Posters</li>
					<li>Funko Pops</li>
					<li>Anything you want!</li>
				</ul>
				<div class="podcast">
					<img class="img-responsive margin-bottom-10" src="https://ssl-static.libsyn.com/p/assets/4/b/6/2/4b620539f4b0747116c3140a3186d450/0-1-20220226-rli72w61lb.jpeg" width=250 alt="podcast cover"><br>
					<audio controls>
						<source src="https://traffic.libsyn.com/secure/horrorhound/HorrorHoundRadio2022_Video.mp3?dest-id=29765" type="audio/mpeg">
					</audio>
				</div>
				<div id="addy">
					11355 Chester Rd<br>
					Cincinnati, OH 45246<br><br>
				</div>
			</main>
			<footer>
				Copyright &copy; 2023 HorrorHound Weekend<br /><a href="mailto:support@horrorhound.com">support@horrorhound.com</a><br>
				<br>Follow Us If you want to be kept up to date about what’s<br> going on, minute by minute, then search for Grant and give us a follow!<br>
				<a href="https://twitter.com/horrorhound"><img src="imgs/twitter.png" alt="Twitter link" width=25></a>
				<a href="https://www.facebook.com/horrorhound/"><img src="imgs/facebook.jfif" alt="Facebook Link" width=25></a>
				<a href="https://www.youtube.com/channel/UCgQQ0_P-CXV1QdEyjGzcWYg"><img src="imgs/youtube.png" alt="Youtube Link" width=25></a>
				<a href="https://horrorhound.libsyn.com/"><img src="imgs/podcast.png" alt="Podcast Link" width=25></a>
			</footer>
		</div>
    </body>
</html>