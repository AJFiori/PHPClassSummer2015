<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Web Site Database</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <?php
            require './functions/dbConnect.php';
            require './functions/util.php';
            
            $results = '';
            $isValid = true;
            $textbox = '';
        ?>
        
    <center>
        <h2>Web Site Database</h2>
    </center>
    
        <center>
            <br/>
            <h2>Enter Web Site:</h2>
            <form class="form-group" action="index.php" method="post">
                <input type="text" name="site" value="<?php echo $textbox ?>" placeholder="Enter Website Site Here">
                <br/><br/>
                <input class="btn btn-default" type="submit" value="Enter New" name="submit" />
            </form>
        
        
        <?php
            if (isPostRequest()) {
                
                $site1 = filter_input(INPUT_POST, 'site');
                
                if ( filter_var($site1, FILTER_VALIDATE_URL) === false ) {
                    $isValid = false;
                    $textbox = filter_input(INPUT_POST, 'site');
                    $results = 'Must Enter A Valid Web Site';
                    ?>
                  
                    
                <?php }
                if ($isValid) {
                    $site = filter_input(INPUT_POST, 'site');
                
                
                    $db = getDatabase();
                
                    $stmt = $db->prepare("INSERT INTO sites SET site = :site, date = NOW()");
            
                    $binds = array(
                        ":site" => $site);
            
                    if ($stmt->execute($binds)) { 
                                  //curl
                        require 'curl.php';
                                 //regex
                        require 'regex.php';
                                //join
                        require 'join.php';
                
                    
                        foreach ($removeDuplicates as $link) { 
                             $site_id = $db->lastInsertId();
                             
                            $stmt2 = $db->prepare("INSERT INTO sitelinks SET link = :link, site_id = :site_id");
                                $binds = array( 
                                    ":link" => $link, ":site_id" => $site_id); 
                            } 
                            $results2 = array(":link" => $link, ":site_id" => $site_id);
                            if ($stmt2->execute($binds)) {
                                $results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                        }   } 
            
               ?>
                <h2>Results found: <?php echo count($removeDuplicates); ?></h2>
                <table class="table">
                        <?php foreach ($results2 as $row): ?><tr>
                        <td><?php echo $row['site_id']; ?></td>
                        <td><?php echo $row['link']; ?></td>
                        </tr><?php endforeach; ?>
                    </table>
                    
            <?php }}
        ?>
        
        
        <br />
        <button class="btn btn-default" onclick="window.location.href='URL.php'">View All</button>
        </center>
        
    </body>
</html>