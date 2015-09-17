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
        $stmt = $db->prepare("SELECT * FROM products");
        $results3 = '';
        $results = array();
            
            if ($stmt->execute() && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            } ?>
    <center>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>All Products:</th>
                    <th>Price:</th>
                    <th>Update:</th>
                    <th>Delete:</th>
                 </tr>   
            </thead>
            <br /><button class="btn btn-default btn-lg btn-block" onClick="location.href='create.php'">Add New Product</button>
         <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['product']; ?></td>
                    <td>$<?php echo $row['price']; ?></td>
                    <td><input type="button" class="btn btn-success" value="Update" onClick="location.href='update.php?id=<?php echo $row['product_id']?>'"/></td>          
<td><input type="button" class="btn btn-danger" value="Delete" onClick="location.href='delete.php?id=<?php echo $row['product_id']?>'"/></td>           
                </tr>
            <?php endforeach; ?>
        </table>
                <button class="btn btn-default" onClick="location.href='../index.php'">Back</button>
    </center>
    </body>
</html>
