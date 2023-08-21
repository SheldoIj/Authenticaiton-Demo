<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Search your Autographs</title>
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
    					echo '<a id="login" href="login.php">Login</a>'; }
    			?>
			</div>
			<h1 id="logo"><a href="index.php"><img src="https://images.horrorhound.com/hh2017/layout/HORRORHOUND-white-black-flat-sm.png" alt="Logo" width=200></a></h1>
			</header>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="shop.php">Shop</a></li>
				</ul>
			</nav>
            <form class="form" method="post" action="search.php">
                <div id="allRadio">
                    <input type="radio" id="view" name=view>
                    <label for="view">View</label>&emsp;
                    <input type="radio" id="add" name="add">
                    <label for="add">Add</label>&emsp;
                    <input type="radio" id="update" name="update">
                    <label for="update">Edit</label>&emsp;
                    <input type="radio" id="delete" name="delete">
                    <label for="delete">Delete</label><br><br>
                </div>
                
				<input type="text" id="customerName" name="customerName" placeholder="Name">&emsp;
				<input type="text" id ="itemDesc" name="itemDesc" placeholder="Item Desc">&emsp;
                <input type="submit" id="submit" value="Submit" name="submit">
            </form>
			<script>
			    if (document.cookie.indexOf('user')<0) {
			        document.getElementById('view').disabled = true;
                    document.getElementById('add').disabled = true;
                    document.getElementById('update').disabled = true;
                    document.getElementById('delete').disabled = true;
                    document.getElementById('customerName').disabled = true;
                    document.getElementById('itemDesc').disabled = true;
                    document.getElementById('submit').disabled = true;
			    } else {
			        document.getElementById('view').disabled = false;
                    document.getElementById('add').disabled = false;
                    document.getElementById('update').disabled = false;
                    document.getElementById('delete').disabled = false;
                    document.getElementById('customerName').disabled = false;
                    document.getElementById('itemDesc').disabled = false;
                    document.getElementById('submit').disabled = false;
			    }
			</script>
            
            <?php
                if(isset($_POST['submit'],$_POST['view'])) {
                   display();
                } 
                if(isset($_POST['submit'],$_POST['add'])) {
                   add();
                } 
                if(isset($_POST['submit'],$_POST['update'])) {
                   update();
                } 
                if(isset($_POST['submit'],$_POST['delete'])) {
                   delete();
                } 
                
                function display() {
                    $mysqli = new mysqli("localhost","sheldoij_admin","Cattachmate5%","sheldoij_Semester_Project");
                    
                    if (empty($_POST["customerName"])) {
                        $sql = 'SELECT * FROM Authenitcate';
                    } else {
    				    $sql = 'SELECT * FROM Authenitcate WHERE Name LIKE "' .$_POST["customerName"]. '"';
                    }
                    
                    $result = $mysqli->query($sql);
                    echo"&emsp;&emsp;&emsp;&emsp;&emsp;Name&emsp;  |  &emsp;Date&emsp;  | &emsp;Item Description&emsp; | &emsp;Item ID&emsp;  <br>";
                    echo"&emsp;------------------------------------------------------------------------------------<br>";

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo " Search: " . $row["Name"]. " | " . $row["Date"]. " | " . $row["Item"]. " | " . $row["ItemID"]. "<br>";
                      }
                    } else {
                      echo "0 results";
                    }
                }
                
                function add() {
                    $mysqli = new mysqli("localhost","sheldoij_admin","Cattachmate5%","sheldoij_Semester_Project");
				    $sql = 'INSERT INTO Authenitcate (Name,Item) VALUES ("' .$_POST["customerName"]. '","' .$_POST["itemDesc"] .'")';
                    $result = $mysqli->query($sql);
                    echo "Record Successfully Added To Database!";
                }
                
                function update() {
                    $mysqli = new mysqli("localhost","sheldoij_admin","Cattachmate5%","sheldoij_Semester_Project");
				    $sql = 'UPDATE Authenitcate SET Name="' .$_POST["customerName"]. '",Item="' .$_POST["itemDesc"]. '" WHERE Name LIKE "' .$_POST["customerName"]. '";';
                    $result = $mysqli->query($sql);
                    echo "Record ". $_POST[customerName] . " Has Been Updated!";
                }
                
                function delete() {
                    $mysqli = new mysqli("localhost","sheldoij_admin","Cattachmate5%","sheldoij_Semester_Project");
				    $sql = 'DELETE FROM Authenitcate WHERE Name LIKE "' .$_POST["customerName"]. '"';
                    $result = $mysqli->query($sql);
                    echo "Record ". $_POST[customerName] . " Has Been Deleted!";
                }
                
            ?>
            <!-- Checks One Radio Button At A Time -->
          
            <script>
                document.getElementById("allRadio").addEventListener("click",(e)=>{
                switch(e.target.getAttribute("id")){
                    case 'view':
                        document.getElementById("add").checked = false;
                        document.getElementById("update").checked = false;
                        document.getElementById("delete").checked = false;
                        document.getElementById('itemDesc').disabled = true;
                        break;
                    case 'add':
                        document.getElementById("view").checked = false;
                        document.getElementById("update").checked = false;
                        document.getElementById("delete").checked = false;
                        document.getElementById('itemDesc').disabled = false;
                        break;
                    case 'update':
                        document.getElementById("view").checked = false;
                        document.getElementById("add").checked = false;
                        document.getElementById("delete").checked = false;
                        document.getElementById('itemDesc').disabled = false;
                        break;
                    case 'delete':
                        document.getElementById("view").checked = false;
                        document.getElementById("add").checked = false;
                        document.getElementById("update").checked = false;
                        document.getElementById('itemDesc').disabled = true;
                        break;
                }
            });
            </script>
			<footer>
		    <p>*Notice*</p>
		    <p>You must be logged in to access any functionality on the "Search" page.</p>
		    <p>You can only Update the Item Description when given correct name.</p>
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