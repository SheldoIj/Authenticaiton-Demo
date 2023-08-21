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
            <div id="loginForm">
                <form method="post" action="processCreate.php">
                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username"><br><br>
                    <label for="password">Password</label><br>
                    <input name="password" id="password" type="password" onkeyup='check();' /><br><br>
                    <label for="passwordCheck">Re-enter Password</label><br>
                    <input type="password" name="passwordCheck" id="passwordCheck"  onkeyup='check();' /><br><br>
                    <span id='message'></span><br>
                    <button id='createBtn' onclick="location.href = 'processCreate.php';" >Create Account</button>
                </form>
                
                <!--/////////Password Creation Checker Script/////////-->
                <script> 
                    var check = function() {
                        if (document.getElementById('password').value.length>3) {
                            if (document.getElementById('password').value == document.getElementById('passwordCheck').value) {
                                document.getElementById('message').style.color = 'green';
                                document.getElementById('message').innerHTML = 'Passwords Matching';
                                document.getElementById('createBtn').disabled = false;
                            } else {
                                document.getElementById('message').style.color = 'red';
                                document.getElementById('message').innerHTML = 'Passwords Not Matching';
                                //document.getElementById('createBtn').style.display = 'none';
                                document.getElementById('createBtn').disabled = true;
                            }
                        } else {
                            document.getElementById('message').style.color = 'red';
                            document.getElementById('message').innerHTML = 'Passwords Too Short.';
                            document.getElementById('createBtn').disabled = true;
                        }
                    }
                </script>
            <!--//////////////////////////////////////////////////-->
            
            </div>
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
