<?php
    $cookie_name = "user";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
    </head>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])) {
                echo "The cookie is not set.";
            } else {
                echo "Value is: " . $_COOKIE[$cookie_name];
            }
        ?> 
    </body>
</html>