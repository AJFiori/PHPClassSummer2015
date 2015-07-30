<!DOCTYPE html>
<?php
        $myvar = 'Hello'; 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> <?PHP echo 'My Page Title'.$myvar; ?> </title>
    </head>
    <body>
        <?PHP echo 'My Page Title'.$myvar; ?>
        <?php
        
            $randomnumber = rand(1,10);
            echo 'My Number is '.$randomnumber;
            
        ?>
    </body>
</html>
