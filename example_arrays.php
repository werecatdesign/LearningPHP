<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Different Types of Arrays</title>
        <link rel = "stylesheet" href = "example_weekdays_stylesheet.css">
    </head>
    <body>
        <?php
        
            // Indexed arrays
            $data = array("Daniel", "John", "Jane");
            //echo $data[0]; // The result will be Daniel

            // Associative arrays
            $data2 = array("first" => "Daniel", "last" => "Nielsen", "age" => 25);
            // Another way to create this array is:
            $data2["first"] = "Daniel";
            $data2["last"] = "Nielsen";
            $data2["age"] = 25;
            print_r($data2); // Prints the Array on the screen
            // keys and values, like in JSON
            echo $data2["first"]; // Now the result will be Daniel

            // Multidimensional arrays
            $data3 = array(array(1,2,3), "John", "Jane");        
            // print_r($data3);
            echo $data3[0][1];
        ?>       
        
        
    </body>
</html>