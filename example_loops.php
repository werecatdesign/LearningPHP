<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Loops</title>
        <link rel = "stylesheet" href = "example_weekdays_stylesheet.css">
    </head>
    <body>
        
        
        <?php
                          
            // Loops
            // While Loop
            $x = 1;
            while ($x < 5) {
                echo "It was raining. The raindrops stung like needles on her face. <br>";
                $x++;
            }
            
            // Do while Loop
            $y = 1;
            do {
                echo "But her skin remained cold. Freezing. Like her heart seemed frozen. Cold to the core. <br>";
                $y++;
            }
            while ($y <5);
        
            // For loop
            
            for ($z = 0; $z<5; $z++) {
                echo "What she was doing here scared her. Broke something in her. But wasn't she broken yet anyway? <br>";
            }
        
            // Foreach loop
            $array = array("The truth was, ", "she couldn't deal. ", "So she needed him, ", "although she hated herself for it. ", "Him. ", "A hitman. A killer.<br>" );
        
            foreach ($array as $loopdata) { // You give the elements of the array another name in the brackets and make it a variable: loopdata
                echo $loopdata;
            }
        
           
        ?>
            
        
        
    </body>
</html>