<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>PHP TEST</title>
    </head>
    <body>
        <h1>
            <?php
                echo "Hello, Boys & ";
                print "Hello, princesses";
            ?>
        </h1>
        <form method ="get">
            <input type = "text" name = "person">
            <button>POST YOUR MEANINGLESS SHIT HERE</button>
        </form>
        <p>
            <?php
                $name = $_GET['person'];
                echo $name." is a wise and beautiful person I aspire to be like. Laugh at me now."                
            ?>
        </p>
        
    </body>
</html>