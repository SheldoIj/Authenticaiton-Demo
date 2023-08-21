<?php
    $cookie_name = "user";
    $cookie_value = "Isaac Sheldon";
    setcookie($cookie_name,$cookie_value,time()+86400,"/");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="AutographVerify.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
	<body>
        <div id="wrapper">
            <header>
				<h1 id="logo"><a href="index.php"><img src="https://images.horrorhound.com/hh2017/layout/HORRORHOUND-white-black-flat-sm.png" alt="Logo" width=200></a></h1>
			</header>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="shop.php">Shop</a></li>
				</ul>
			</nav>
			<?php
				$servername = "localhost";
				$username = "sheldoij_" . $_POST['username'];
				$password = $_POST['password'];
				$databaseName = "sheldoij_Semester_Project";
				
				//Create Connection
				$dbc = mysqli_connect($servername, $username, $password, $databaseName);

				//Check Connection
				if (mysqli_connect_error()) {
					die("Connection failed: " . mysqli_connect_error());
				}
				echo "Authenitcation Sucessful... Welcome " .$_POST['username'];

			/*	$cookie_name = "user";
				$cookie_value = $_POST['username'];
				setcookie($cookie_name,$cookie_value,time()+86400,"/");
				*/
			?>
			
			<?php
			/*	if(!isset($_COOKIE[$cookie_name])) {
					echo "Cookie named '" . $cookie_name . "' is not set!";
				} else {
					echo "Cookie '" . $cookie_name . "' is set!<br>";
					echo "Value is: " . $_COOKIE[$cookie_value];
				}
			*/?>
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