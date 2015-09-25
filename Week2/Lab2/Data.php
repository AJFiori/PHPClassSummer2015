<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style3.css">
        <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <title>Actor Database</title>
    </head>
    <body>
<!-- Connects to database and extracts information into the table -->
        <?php
        include './dbconnect.php';
        include './functions.php';
        
        $db = getDatabase();
       
        $stmt = $db->prepare("SELECT * FROM actors");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>
<!-- Header-->
    <center>
        <div class="head">
            <h2>View All Actors</h2>
        </div>
    </center>
<!--Creates the table-->
<br/>
<br/>
<br/>
    <center>
    <div id="table">
        
        <table class="table table-hover" style="width: 500px">
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
<!-- Displays data-->      
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
        <br/>
        <br/>
         <input type="button" value="Back" class="btn btn-default" onClick="location.href='view.php'"/>
        
    </div>
    </center>
    </body>
</html>