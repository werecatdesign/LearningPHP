<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Functions</title>
        <link rel = "stylesheet" href = "example_weekdays_stylesheet.css">
    </head>
    <body>
        
        
        <?php
        
            $x = 100;
                          
            function newCalc($input) {
                $newNumber = $input*0.75;
                echo "Here is 75% of ".$input." : ".$newNumber;
            }
            
            newCalc($x);
           
        ?>
            
        
        
    </body>
</html>