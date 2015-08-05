<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title>Actor Database</title>
    </head>
    <body>
        <?php
        /*
         * include the data base connect file
         * and helper functions as if we are adding
         * the code on the page
         */
        include './dbconnect.php';
        include './functions.php';
        
        /*
         * get and hold a database connection 
         * into the $db variable
         */
        $db = getDatabase();
       
        $stmt = $db->prepare("SELECT * FROM actors");
        /*
         * We execute the statement and make sure we
         * got some results back.
         */
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>
    <center>
    <div id='table'>
        
    
        <table>
            <thead>
                <tr>
                    <th>ID </th>
                    <th>FirstName </th>
                    <th>LastName </th>
                    <th>dob </th>
                    <th>height </th>
                    
                </tr>
            </thead>
        
            <?php
            /*
             * Use a for each loop to go through the
             * associative array. $results is a multi 
             * dimensional array. Arrays with arrays.
             * 
             * So we loop through each result to get back
             * an array with values
             * 
             * feel free to 
             * <?php echo print_r($results); ?>
             * to see how the array is structured
             */            
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
         <input type="button" value="Back" onClick="location.href='view.php'"/>
        
    </div>
    </center>
    </body>
</html>