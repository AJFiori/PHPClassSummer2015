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
        
        $products = getAllProducts();
        
        $results3 = '';
        
        if (isPostRequest() ) {
            $product_id = filter_input(INPUT_POST, 'product_id');
            
            deleteProduct($product_id);
            
            if (deleteProduct($product_id) == true) {
                    $results3 = 'Product deleted';
                }
                else {
                    $results3 = 'Product was not deleted';
                }
            
        }
        
        ?>
    <center>
        <h1>Delete Product</h1>
        
        <?php include '../../includes/results.html.php'; ?>
        
        <form method="post" action="#">
            
            <div class="form-group"> 
            <select name="product_id">
            <?php foreach ($products as $row): ?>
                <option value="<?php echo $row['product_id']; ?>">
                    <?php echo $row['product']; ?>
                </option>
            <?php endforeach; ?>
            </select>
               <br/><br/>
            <input class="btn btn-default" type="submit" value="Delete" /> <input type="button" class="btn btn-default" value="Main" onClick="location.href='Index.php'"/>
                </div>
        </form>
        <?php include '../../includes/results.html.php'; ?>
    </center>
    </body>
</html>
