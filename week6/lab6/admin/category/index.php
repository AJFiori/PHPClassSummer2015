<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style3.css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../../includes/session-start.php';
        require_once '../../includes/access-required.html.php';
         
        include_once '../../functions/dbConnect.php';
        include_once '../../functions/category-functions.php';
        include_once '../../functions/products-functions.php';
        include_once '../../functions/until.php';
        
        $db = getDatabase();
        $stmt = $db->prepare("SELECT * FROM categories");
        $results3 = '';
        $results = array();
            
            if ($stmt->execute() && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            } ?>
    <center>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>All Categories:</th>
                    <th>Update:</th>
                    <th>Delete:</th>
                 </tr>   
            </thead>
                
            
<br /><button class="btn btn-default btn-lg btn-block" onClick="location.href='create.php'">Add New Category</button>
         <?php foreach ($results as $row): ?>
                <tr>
                <td><?php echo $row['category']; ?></td>
 <td><input type="button" class="btn btn-success" value="Update" onClick="location.href='update.php?id=<?php echo $row['category_id']?>'"/></td>          
<td><input type="button" class="btn btn-danger" value="Delete" onClick="location.href='delete.php?id=<?php echo $row['category_id']?>'"/></td>           
                </tr>
            <?php endforeach; ?>
            
        </table>
        <button class="btn btn-default" onClick="location.href='../index.php'">Back</button><br/>
    </center>
    
    </body>
</html>
