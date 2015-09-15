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
            $category = filter_input(INPUT_POST, 'category');
            
            if(isValidCategory($category) == true) {
              createCategory($category);  
                
              $results3 ='Category added';
            }
            else {
              $results3 ='Category is not valid';
            }
        }?>
            
    <center>
        <h1>Add Category</h1><br/>
        
    
        <form method="post" action="#">
            <div class="form-group">
            Category Name:<br/><br/>
            <input type="text" name="category" value="" /><br/><br/>
            <input class="btn btn-default" type="submit" value="Submit" /> <input type="button" class="btn btn-default" value="Main" onClick="location.href='Index.php'"/>
            </div>
        </form>
                
        <?php include '../../includes/results.html.php'; ?>
    </center>
        
    </body>
</html>
