<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
        <title> Web Site database</title>
    </head>
    <body>   
 <?php
        
            require './functions/dbConnect.php';
            require './functions/util.php';
            $db = getDatabase();
            
                $stmt = $db->prepare("SELECT * FROM sites ORDER BY site DESC");
                $sites = array();
                if ($stmt->execute() && $stmt->rowCount() > 0) {
                    $sites = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                    $site_id = filter_input(INPUT_POST, 'site_id');
            
            //print_r($results);
        ?>   
            <?php if( isset($results) ): ?>
            <h4>Results found: <?php echo count($results); ?></h4>
            <table style="table">
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?php echo $row['link']; ?></td> 
                    </tr>
                <?php endforeach; ?>
            </table>

                <?php endif; ?>

   </body>
</html>     
           
        