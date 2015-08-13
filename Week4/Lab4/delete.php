<!DOCTYPE html>
<!--Deletes corporation from database-->
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
            include './util.php';
           
            $db = getDatabase();
            $id = filter_input(INPUT_GET, 'id'); 
            $stmt = $db->prepare("DELETE FROM corps where id = :id");
            $binds = array(
                ":id" => $id
            );
       
        $isDeleted = false;
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $isDeleted = true;
        }       
        
        ?>
    <center> 
        <br/><br/>
    <img src="image/AC3.png" alt="AC" height="100" width="500">
        <h1> Record <?php echo $id; ?>
         <?php if ( !$isDeleted ): ?> 
          Not
        <?php endif; ?>
        Deleted</h1>
        
        <input type="button" class="btn btn-default" value="Go Back" onClick="location.href='view.php'"/>
    </center> 
        
        
    </body>
</html>
