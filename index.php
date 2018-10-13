<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Inserting Data into an Array</title>
        <link rel = "stylesheet" href = "example_weekdays_stylesheet.css">
    </head>
    <body>
        <?php
        
            $data = array();
            /*$data[] = "Daniel";
            $data[] = "John";*/
            array_push($data, "Daniel", "John", "Jane");
            print_r($data);
        ?>       
        
        
    </body>
</html>