<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title>Atlas Corporation</title>
    </head>
    <body>
        
                
         <?php
                 include './dbconnect.php';
                 include './functions.php';
                 
                $value = filter_input(INPUT_GET, 'corp');
                $db = getDatabase();
                $stmt = $db->prepare("SELECT * FROM corps WHERE id =:value");
                $binds = array(
                    ":value"=>$value
                );
                $results = array();
                if($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
        ?>
        <br/><br/>
        
 <!--writes out the list-->
    <center>
        <form class="form-inline">
        <?php foreach ($results as $row): ?>
        <h1><?php echo $row['corp']?></h1>
        <p>Date:  <b><?php echo $row['incorp_dt']."";?></b></p>
        <p>Email:  <b><?php echo $row['email']."";?></b></p>
        <p>Zip Code:  <b><?php echo $row['zipcode']."";?></b></p>
        <P>Owner:  <b><?php echo $row['owner']."";?></b></p>
        <p>Phone:  <b><?php echo $row['phone']."";?></p>
    <?php endforeach;?>
        </form>
    </Center>    
     
 <!--Wanted buttons to be all on the same line-->
    <center>
<input type="button" class="btn btn-default" value="Main" onClick="location.href='Index.php'"/>&nbsp;&nbsp;<input type="button" class="btn btn-default" value="Go Back" onClick="location.href='view.php'"/>&nbsp;&nbsp;<input type="button" class="btn btn-default" value="Update" onClick="location.href='update.php?id=<?php echo $row['id']?>'"/>&nbsp;&nbsp;<input type="button" class="btn btn-default" value="Delete" onClick="location.href='delete.php?id=<?php echo $row['id']?>'"/>
    </center>
    </body>
</html>
