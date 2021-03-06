<!DOCTYPE html>
<!-- Page where you can view all data and specialty functions that were created in the includes folder -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title>Atlas Corporation</title>        
    </head>
    <body>
       <br/>
       <center>
<!--Header Image-->
    <img src="image/AC3.png" alt="AC" height="100" width="500">
       </center>
    <?php
        include_once './functions/dbconnect.php';
        include_once './functions/dbData.php';
        include './Includes/FormOrder.php';
        include './Includes/FormSearch.php';
        $results = getAllDatabaseData();
        $action = filter_input(INPUT_GET, 'action');
        if ($action === 'sort')
        {

//Sorts columns so you can view in certain ways
            $column = filter_input(INPUT_GET, 'sortBy');
            $order = filter_input(INPUT_GET, 'sortOrder');
            $results = sortDatabase($column, $order);
        }
        if ($action === 'search')
        {
            $column = filter_input(INPUT_GET, 'searchColumn');
            $userSearch = filter_input(INPUT_GET, 'userSearch');
            $results = searchDatabase($column, $userSearch);
//Counts Columns 
            $columnCount = count($results);
            
            if ($columnCount > 0)
            {
                echo "<h4><b>Total Results: " . $columnCount . "</h4></b>";
            }
            else
            {
                echo "<h4><b>No Results Found</h4></b>";
            }
        }
        ?>
        
        <table class="table table-striped">
            <thead>
                    <th>ID:</th>
                    <th>Atlas Corporations:</th>
                    <th>Date:</th>
                    <th>E-mail:</th>
                    <th>Zip code:</th> 
                    <th>Owner:</th> 
                    <th>Phone:</th>         
            </thead>
            
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <td><?php echo  date("F j, Y, g:i a",strtotime($row['incorp_dt'])); $row['incorp_dt']; ?></td> 
                    <td><?php echo $row['email']; ?></td> 
                    <td><?php echo $row['zipcode']; ?></td> 
                    <td><?php echo $row['owner']; ?></td> 
                    <td><?php echo $row['phone']; ?></td> 
                </tr>
            <?php endforeach; ?>
          
        </table>
           
    </body>
</html>