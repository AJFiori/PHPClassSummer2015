<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Corps</title>
    </head>
    <body>
        <?php
        
            include './dbconnect.php';
            include './functions.php';
           
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
                
        <h1> Record <?php echo $id; ?>
         <?php if ( !$isDeleted ): ?> 
          Not
        <?php endif; ?>
        Deleted</h1>
        
        <input type="button" value="Go Back" onClick="location.href='view.php'"/>
        
        
        
    </body>
</html>
