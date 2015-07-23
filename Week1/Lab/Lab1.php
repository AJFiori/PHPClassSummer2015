<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
<!-- create 10 X 10 Table -->
    <table border="1">
    <?php
        for($tr = 1; $tr <= 10; $tr++):?>
        <tr>    
    <?php 
        for($td = 1; $td <= 10; $td++):?>
<!-- End Table-->

<!--Populates color-->
 <?php $randColor = '#'.strtoupper(dechex(rand(0x000000, 0xFFFFFF)));?>
   
        <td style = "background-color: <?php echo $randColor; ?>">
                <?php echo $randColor; ?>
            <span style="color:#ffffff;"> <?php echo $randColor; ?></span>
                
        </td>
<?php endfor; ?>                
        </tr>
<?php endfor; ?>
     </table>
      
    </body>
</html>
