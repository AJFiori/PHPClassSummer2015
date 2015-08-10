<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title>Corps</title>
    </head>
    <body>
      <!--Connect to database-->
        <?php
        include './dbconnect.php';
        include './functions.php';
         ?>  
        
        <!--searches database for everything-->
             <?php
                $value = filter_input(INPUT_GET, 'search');
                $type = filter_input(INPUT_GET, 'searchby');
                $db = getDatabase();
                if($type=='Name')
                {
                $stmt = $db->prepare("SELECT * FROM corps WHERE corp LIKE CONCAT(:value,'%')");
                $binds = array(
                    ":value"=>$value
                );
                $results = array();
                if($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                }
                else if($type=='Zip Code')
                {
                $stmt = $db->prepare("SELECT * FROM corps WHERE zipcode LIKE CONCAT(:value,'%')");
                $binds = array(
                    ":value"=>$value
                );
                $results = array();
                if($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                }
                else if($type=='Owner')
                {
                $stmt = $db->prepare("SELECT * FROM corps WHERE owner LIKE CONCAT(:value,'%')");
                $binds = array(
                    ":value"=>$value
                );
                $results = array();
                if($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                }
                else
                {
                $stmt = $db->prepare("SELECT * FROM corps");
                $results = array();
                if($stmt->execute() && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                }
                ?>
       
        <table>
            <thead>
                    <th>Corp</th>  
                    <th>Zip Code</th>
                    <th>Owner</th>  
                    
            </thead>
            
            <?php foreach ($results as $row): ?>
                <tr>
                    <td> <a href='read.php?corp=<?php echo $row['id']; ?>'><?php echo $row['corp']; ?></td>
                    <td><?php echo $row['zipcode']; ?></td>
                    <td><?php echo $row['owner']; ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </table>
    <center>
<input type="button" value="Go Back" onClick="location.href='Index.php'"/>
    </center>
    </body>
</html>