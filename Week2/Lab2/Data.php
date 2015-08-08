<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title>Actor Database</title>
    </head>
    <body>
        <?php
        
        /* Connects to the Database */ 
        include './dbconnect.php';
        include './functions.php';
        
        $db = getDatabase();
       
        $stmt = $db->prepare("SELECT * FROM actors");
       /* Grabs results from the database */
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>
        
        <!--Creates the table-->
    <center>
    <div id='table'>
        
    
        <table>
            <thead>
                <tr>
                    <th>ID &nbsp; &nbsp;</th> 
                    <th>First Name &nbsp; &nbsp;</th> 
                    <th>Last Name &nbsp; &nbsp;</th> 
                    <th>Date of Birth &nbsp; &nbsp; &nbsp; &nbsp;</th> 
                    <th>Height</th> 
                    
                </tr>
            </thead>
        
            <?php
                     
            ?>
            
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['FirstName']; ?></td>
                    <td><?php echo $row['LastName']; ?></td> 
                    <td><?php echo $row['dob']; ?></td> 
                    <td><?php echo $row['height']; ?></td> 
                </tr>
                
            <?php endforeach; ?>
        </table>
        <br />
         <input type="button" value="Back" onClick="location.href='view.php'"/>
        
    </div>
    </center>
    </body>
</html>