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
        
        $results3 = '';
        
         if (isPostRequest() ) {
            $product_id = filter_input(INPUT_POST, 'product_id');
            $product = filter_input(INPUT_POST, 'product');
            $price = filter_input(INPUT_POST, 'price');
            $image = filter_input(INPUT_POST, 'image');
             
            UpdateProduct($product_id, $product, $price, $image);
            
            if (UpdateProduct($product_id, $product, $price, $image) == true) {
                    $results = 'Product updated';
            }
            else {
                    $results = 'Product was not updated';
            }
         }
        ?>
    <center>
        <h1>Update Product</h1>
        
        
        <form method="post" action="#">
            <div class="form-group"> 
            New Product Name:
            <br/>
            <input type="text" name="product" value=""/><br />
            Price: 
            <br/>
            <input type="text" name="price" value="" />
            <input class="btn btn-default" type="submit" value="Submit" /></div>
        </form>
            <button class="btn btn-default" onClick="location.href='index.php'">Back</button><br/>
            <br/><br/>
            <?php include '../../includes/results.html.php'; ?>
    </center>
    </body>
</html>
