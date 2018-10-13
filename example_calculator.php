<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Calculator</title>
    </head>
    <body>
        <form>
            <input type ="text" name = "num1" placeholder = "Number 1"> <!-- The placeholder determines what you see on the place holder-->
            <input type ="text" name = "num2" placeholder = "Number 2"> <!-- The placeholder is greyed text in the text field -->
            <select name = "operator"> <!-- everything that shall be referred to in the PHP code has to get a name -->
                <!--  The select creates a dropdown menu  -->
                <option>None</option> <!-- The options are the options in the dropdown menu -->
                <option>Add</option>
                <option>Subtract</option>
                <option>Mulitply</option>
                <option>Divide</option>              
                    
            </select>
            <button name = "submit" value = "submit" type = "submit">Calculate</button>
        </form>
        <p>The result is:</p>
        
        <?php
           if (isset($_GET['submit'])) { // if the button has actually been set. If " is set submit" and submit is retrieved via the get method
                                        // The GET method will show the information in the URL. (POST method won't) 
                                        // Referring to the name "submit
               $result1 = $_GET['num1']; // Get the name of the first number
               $result2 = $_GET['num2']; // Get the name of the second number
               $operator = $_GET['operator']; // Get the name of the operator
               switch ($operator) { // We are checking the operator this is why the operator needs to be in parentheses
                    case "None": 
                       echo "You need to select a method!"; // If he didn't select an operator, it tells him to do so
                    break; 
                    case "Add": 
                       echo $result1 + $result2; 
                    break;
                    case "Subtract": 
                       echo $result1 - $result2;; 
                    break; 
                    case "Multiply": 
                       echo $result1 * $result2;; 
                    break; 
                    case "Divide": 
                       echo $result1 / $result2;; 
                    break; 
               }
               
           }
        
        ?>
            
        
        
    </body>
</html>