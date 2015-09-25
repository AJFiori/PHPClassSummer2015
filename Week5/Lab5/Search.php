<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style3.css">
        <title>Web site Lookup</title>
    </head>
    <body>
        <?php
//Connects to database and pulls info

            include './functions/dbconnect.php';
            include './functions/until.php';
            
            
                $db = dbconnect();

                $stmt = $db->prepare("SELECT * FROM sites");
                $sites = array();
                if ($stmt->execute() && $stmt->rowCount() > 0) 
                {
                    $sites = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                }
                  
               
                if ( isPostRequest() ) 
                {
                    $stmt3 = $db->prepare("SELECT * FROM sitelinks WHERE site_id = :site_id");
                    $site_id = filter_input(INPUT_POST, 'site_id');
                    $siteForDropdown = $site_id;
                    $binds = array(
                    ":site_id" => $site_id
                    );

                    if ($stmt3->execute($binds) && $stmt3->rowCount() > 0) 
                    {

                        $results = $stmt3->fetchAll(PDO::FETCH_ASSOC);
                        $displaySite = $sites[$site_id]["site"];
//displays date
                        $displayDate = date("m/d/Y", strtotime($sites[$site_id]["date"]));

                
                echo "<br>";
                    }  
                }
            
            
        ?>
<br/>
<br/>
<br/>

<!-- Header-->
    <center>
<div class="head">
    <h1>Look site up</h1>
</div>
        <form method="post" action="#">
 
            <select name="site_id">
            <?php foreach ($sites as $row): ?>
                <option value="<?php echo $row["site_id"]; ?>" <?php if (isset($siteForDropdown) && $row["site_id"] == $siteForDropdown) echo "selected";?>><?php echo $row["site"]; ?></option>
            <?php endforeach; ?>
            </select>
<br/><br/>
           <input type="submit"  value="Submit" class="btn btn-default" />&nbsp;<input type="button" value="Back" class="btn btn-default" onClick="location.href='Index.php'"/>
        </form>     
       
<!--displays results-->
        <?php if( isset($results) ): ?>
 
 <div class="Message">       
     <h3><b>Site:</b><br/> <?php echo $displaySite; ?></h3>
     <h3><b>Added:</b><br/> <?php echo $displayDate; ?></h3>
     <h4><b>Results found <?php echo count($results); ?></b></h4>
 </div>
     
<!--provides hyper link-->
<tbody>
                <?php foreach ($results as $row): ?>
                    <tr>
<td><a href="<?php echo $row["link"]; ?>" target="<?php echo $row["link"]; ?>"</a><?php echo $row["link"]; ?></td> 
                    </tr>
                <?php endforeach; ?>
                </tbody>
            <?php endif; ?>

        
        
        
    </body>
</html>