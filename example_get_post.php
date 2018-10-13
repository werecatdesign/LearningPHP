<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Loops</title>
        <link rel = "stylesheet" href = "example_weekdays_stylesheet.css">
    </head>
    <body>
        <?php
            echo $_POST['name']; // refers to the value set in the post method
        ?>
        
        <form method = "GET"> <!-- The method tells the submit button what to do with the information -->
                                <!-- GET: It will be passed into the URL and we can see it in the URL -->
                                <!-- POST: It will be passed into the URL and we cannot see it in the URL -->
            <input type = "hidden" name = "name" value = "Daniel">
            <button type = "submit">Press me!</button>
        </form>
            
        <form method = "POST"> <!-- The method tells the submit button what to do with the information -->
                                <!-- GET: It will be passed into the URL and we can see it in the URL -->
                                <!-- POST: It will be passed into the URL and we cannot see it in the URL -->
            <input type = "hidden" name = "name" value = "Suzie">
            <button type = "submit">Press me!</button>
        </form>
        
        <?php
            echo $_GET['name']; // refers to the value set in the post method
        ?>
        
        
    </body>
</html>