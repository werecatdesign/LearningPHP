<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>PHP TEST</title>
    </head>
    <body>
        
        <?php
            $x = 1; 
        
            switch($x) { // Variable x goes into the parentheses because it is the variable that shall be checked.
                case 1: // First case - The case always names the value that is checked for
                    echo "The answer is one.";
                break; // Ending case number 1
                case "number": // Second case - Here it does not say case 2 because it is checking if the value is number
                    echo "The answer is number.";
                break; // Ending case number 2
                default:  // The default is if the case is not listed
	               echo "There is no answer"; // The default does not need a break

            }
        
        ?>
            
        
        
    </body>
</html>