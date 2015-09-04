<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
         <title>Atlas Corporation</title>
    </head>
    <body>
<!--Connect to database-->
        <?php
        include './dbconnect.php';
        include './util.php';
        include './dbData.php';
         ?>  
        
<!--searches database for everything-->
             <?php
                                       
                $value = filter_input(INPUT_GET, 'search');
                $type = filter_input(INPUT_GET, 'searchby');
                $action = filter_input(INPUT_POST, 'action');
                $org = array();
                $db = getDatabase();
                
                if ( $action === 'Search' ) {
       
        $column = filter_input(INPUT_POST, 'Search');
        $search = filter_input(INPUT_POST, 'searchby');
        $sresults = searchTest($column, $search);
                }
        
                
    switch ($type) {
         //searches by corp
                    case 'corp': 
                        $stmt = $db->prepare("SELECT * FROM corps WHERE corp LIKE CONCAT(:value,'%')");
                        $binds = array(
                        ":value" => strtoupper($value)
                        );
                        $results = array();
                    if ($stmt->execute($binds)&& $stmt->rowCount() > 0) {
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);}
                        break;
         //searches by Date
                    case 'incorp_dt': //searches by Date
                        $stmt = $db->prepare("SELECT * FROM corps WHERE incorp_dt LIKE CONCAT(:value,'%')");
                        $binds = array(
                        ":value" => strtoupper($value)
                        );
                        $results = array();
                    if ($stmt->execute($binds)&& $stmt->rowCount() > 0) {
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);}
                        break;
         //searches by Email
                    case 'email': 
                        $stmt = $db->prepare("SELECT * FROM corps WHERE email LIKE CONCAT(:value,'%')");
                        $binds = array(
                        ":value" => strtoupper($value)
                        );
                        $results = array();
                    if ($stmt->execute($binds)&& $stmt->rowCount() > 0) {
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);}
                        break;
         //searches by Zip Code
                    case 'zipcode':
                        $stmt = $db->prepare("SELECT * FROM corps WHERE zipcode LIKE CONCAT(:value,'%')");
                        $binds = array(
                        ":value" => strtoupper($value)
                        );
                        $results = array();
                    if ($stmt->execute($binds)&& $stmt->rowCount() > 0) {
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);}
                        break;
         //searches by Owner
                    case 'owner': 
                        $stmt = $db->prepare("SELECT * FROM corps WHERE owner LIKE CONCAT(:value,'%')");
                        $binds = array(
                        ":value" => strtoupper($value)
                        );
                        $results = array();
                    if ($stmt->execute($binds)&& $stmt->rowCount() > 0) {
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);}
                        break;
         //searches by Phone
                    case 'phone':
                        $stmt = $db->prepare("SELECT * FROM corps WHERE phone LIKE CONCAT(:value,'%')");
                        $binds = array(
                        ":value" => strtoupper($value)
                        );
                        $results = array();
                    if ($stmt->execute($binds)&& $stmt->rowCount() > 0) {
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);}
                        break;
                    default: //if search string is empty
                        $stmt = $db->prepare("SELECT * FROM corps");
                    }
                    if ($stmt && $stmt->execute($org)) {
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    }
                ?>
       
        <!-- table -->
    <center>
        <br/><br/>
        
            <?php if ( $action === 'View All' ) {
       
        $searchby = filter_input(INPUT_POST, 'searchby');
        $orderBy = filter_input(INPUT_POST, 'orderBy');
        $oresults = getALLTestData($searchby, $orderBy);
        }
        ?>
        
        
<!--Header Image-->
    <img src="image/AC3.png" alt="AC" height="100" width="500">
    </center>
        <br/>
        <table class="table table-striped">
            <thead>
                    <th>Atlas Corporations:</th>
                    <th>Date:</th>
                    <th>E-mail:</th>
                    <th>Zip code:</th> 
                    <th>Owner:</th> 
                    <th>Phone:</th> 
                    <th>Update:</th>
                    <th>Delete:</th>
                    
            </thead>
            
<!-- buttons to update & delete -->
  <?php foreach ($results as $row): ?>
                <tr>
        <td> <a href='read.php?corp=<?php echo $row['id']; ?>'><?php echo $row['corp']; ?></td>
        <td><?php echo  date("F j Y",strtotime($row['incorp_dt'])); ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['zipcode']; ?>
        <td><?php echo $row['owner']; ?>
        <td><?php echo $row['phone']; ?>
        <td><input type="button" class="btn btn-success" value="Update" onClick="location.href='update.php?id=<?php echo $row['id']?>'"/></td>
    <td><input type="button" class="btn btn-danger" value="Delete" onClick="location.href='delete.php?id=<?php echo $row['id']?>'"/></td>
                </tr>
    
            <?php endforeach; ?>
        </table>
    <center>
<input type="button" class="btn btn-default" value="Go Back" onClick="location.href='Index.php'"/>
    </center>
    </body>
</html>