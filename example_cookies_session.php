<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Loops</title>
        <link rel = "stylesheet" href = "example_weekdays_stylesheet.css">
    </head>
    <body>
        
        <?php
            setcookie ("name", "Daniel", time() + 86400); 
            // Name of the cookie is a mandatory parameter. 
            // Then you have to give this name a value.
            // Then you have to determine after how long of a time after now the cookie expires: 86,400 ms (= 1day)
            // By setting time() - arbitrary number, the cookie automatically destroys itself because it should have expired before now.
        
            $_SESSION['name'] = "12"; // The session is called name. The user ID is 12.
        ?>
        
    </body>
</html>