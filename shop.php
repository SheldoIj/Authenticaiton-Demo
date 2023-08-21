<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shop Verified Items</title>
        <link rel="stylesheet" href="AutographVerify.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
	<body>
        <div id="wrapper">
			<header>
			<?php
				echo $_POST['username'];
			?>
			<h1 id="logo"><a href="index.php"><img src="https://images.horrorhound.com/hh2017/layout/HORRORHOUND-white-black-flat-sm.png" alt="Logo" width=200></a></h1>
			</header>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="shop.php">Shop</a></li>
				</ul>
			</nav>
			<table>
				<tr>
					<th><img src="imgs/stanlee.png" height=300 width=250 alt="8x11 autograph image"></th>
					<td>
						<h1>Photos $50.00</h1>
					</td>
				</tr>
				<tr>
					<th><img src="imgs/poster.jpg" height=300 width=250 alt="signed poster image"></th>
					<td>
						<h1>Posters $75.00</h1>
					</td>
				</tr>
				<tr>
					<th><img src="imgs/comic.jpg" height=300 width=250 alt="signed comic/magazine image"></th>
					<td>
						<h1>Comics/Magazines $60.00</h1>
					</td>
				</tr>
				<tr>
					<th><img src="imgs/funko.png" height=300 width=250 alt="signed figure image"></th>
					<td>
						<h1>Figurines $55.00</h1>
					</td>
				</tr>
			</table>
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