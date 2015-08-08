<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title></title>
    </head>
    <body>
        
                
         <?php
                 include './dbconnect.php';
                 include './functions.php';
                 
                $value = filter_input(INPUT_GET, 'corp');
                $db = getDatabase();
                $stmt = $db->prepare("SELECT * FROM corps WHERE corp LIKE CONCAT(:value,'%')");
                $binds = array(
                    ":value"=>strtoupper($value)
                );
                $results = array();
                if($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
        ?>
    <center>
        <?php foreach ($results as $row): ?>
        <h1><?php echo $row['corp']?></h1>
        <p> Date:</p>
        <p><?php echo $row['incorp_dt']."";?></p>
        <p>Email:</P>
        <p><?php echo $row['email']."";?></p>
        <p>Zip Code:</P>
        <p><?php echo $row['zipcode']."";?></p>
        <P>Owner:</P>
        <p><?php echo $row['owner']."";?></p>
        <p>Phone:</P>
        <p><?php echo $row['phone']."";?></p>
    <?php endforeach;?>
    </Center>    
       
    <center>
<input type="button" value="Main" onClick="location.href='Index.php'"/>&nbsp;&nbsp;<input type="button" value="Go Back" onClick="location.href='view.php'"/>
    </center>
    </body>
</html>
