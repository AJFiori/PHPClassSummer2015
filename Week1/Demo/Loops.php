<!DOCTYPE html>

<html>
<head>
        <meta charset="UTF-8">
        <title></title>
</head>
    <body>
        <ul>   
        <?php for ($index = 1; $index < 10; $index++) { ?>
            <li><?php echo $index ?> </li>    
        <?php } ?>
        </ul> 
        
        
        
        //easier to see/read the code
        <ul>
        <?php for($index = 1; $index <= 10; $index++):?>
            <li> <?php echo $index;?> </li>
        <?php endfor; ?>
        </ul>
        
        
    </body>
</html>
