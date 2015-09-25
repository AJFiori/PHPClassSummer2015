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
            
//Connects to database
            include './functions/dbconnect.php';
            include './functions/until.php';        
            

/*
 * variables  to update results message, contents of text box 
 * and an array to hold the links pulled from the entered site through curl
 */
            
            $results = '';
            $linkValue = "";
            $linksOnSite = array();
            
/*
 * after submit, check if website is valid
 * then check if site is already in database
 * then check if website has curl output
 * then add the site to the sites database
 * update message with success or failure
 */
            if (isPostRequest()) 
                {
                    $site = filter_input(INPUT_POST, 'site');
                    
                    if ( filter_var($site, FILTER_VALIDATE_URL) !== false  )
                    {   
                           
                        if (isItemInArray($site, "site", "sites")== false)

                        {                        
                            if (sendToCurl($site))
                            {
                                $linksOnSite = filterRegEx(sendToCurl($site));

                                $db = dbconnect();
                                $stmt = $db->prepare("INSERT INTO sites SET site = :site, date = now()");
                                $binds = array(
                                ":site" => $site                        
                                );

                                if ($stmt->execute($binds) && $stmt->rowCount() > 0) 
                                {
                                    $site_id = $db->lastInsertId();
                                    
                                    $stmt2 = $db->prepare("INSERT INTO sitelinks SET site_id = :site_id, link = :link");

                                    foreach ($linksOnSite as $link) {
                                        $binds = array( ":link" => $link, ":site_id" => $site_id); 
                                        $stmt2->execute($binds);
                                    } 

                                    $results = "Site Added: " . $site;
                                    
                                    
                                    
                                }
                            }
                            else
                            {
                            $results = "**Unable to get links on site**";
                            $linkValue = $site;                        
                            }
                        }
                        else
                        {
                            $results = "**Site has already been entered**";
                            $linkValue = $site;                        
                        }
                    }                    
                    else
                    {
                        $results = "**URL is not valid**";
                        $linkValue = $site;                        
                    }
            }

            

        ?>

<br/>
<br/>

<!-- Header-->
    <center>
<div class="head">
    <h1>Web site lookup</h1>
</div>
        
<!--Enter web site-->
<div class="web">
        <form method="post" action="#">            
            Enter Web site URL:
</div>      <br/>
            <input type="text" value="<?php echo $linkValue ?>" name="site" />
            <br /><br/>
            <input type="submit"  value="Submit" class="btn btn-default" />&nbsp;<input type="button" value="View" class="btn btn-default" onClick="location.href='search.php'"/>
            <br>
        </form>

        
 <!-- pushes out error message-->       
         <br/>   
        <?php include './includes/results.html.php'; ?>
            <table>
            
            <tbody>
            <?php foreach ($linksOnSite as $row): ?>
                <tr>
                    <td><?php echo $row; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </center>      
            
            
    </body>
</html>
