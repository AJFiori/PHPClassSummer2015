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
        
        $categories = getAllCategories();
        
        $results3 = '';
        
         if (isPostRequest() ) {
            $category_id = filter_input(INPUT_POST, 'category_id');
            $category = filter_input(INPUT_POST, 'category');
             
            updateCategory($category_id, $category);
            
            if (updateCategory($category_id, $category) == true) {
                    $results = 'Category updated';
            }
            else {
                    $results = 'Category was not updated';
            }
         }
        ?>
    <center>
        <h1>Update Category</h1><br/>
        
        
        <form method="post" action="#">
            <div class="form-group"> 
            <select name="category_id">
            <?php foreach ($categories as $row): ?>
                <option value="<?php echo $row['category_id']; ?>">
                    <?php echo $row['category']; ?>
                </option>
            <?php endforeach; ?>
            </select><br/></div>
            Update Category: 
            <br/>
            <input type="text" name="category" value="" /><br /><br />
            <input class="btn btn-default" type="submit" value="Submit" /> <input type="button" class="btn btn-default" value="Main" onClick="location.href='Index.php'"/>
        </form>
            
        
        <?php include '../../includes/results.html.php'; ?>
    </center>
    </body>
</html>
