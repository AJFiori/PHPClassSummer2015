<!DOCTYPE html>
<html>
    

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title>Atlas Corporation</title>
    <center>  
    <br/><br/>
<!--Header Image-->
    <img src="image/AC3.png" alt="AC" height="100" width="500">
    </center>
    </head>
    <body>
      <?php
        include './dbconnect.php';
        include './util.php';
        $results = '';
        if (isPostRequest()) {
            $db = getDatabase();
            $stmt = $db->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = Now(),email = :email, zipcode = :zipcode, owner = :owner, phone = :phone");

            $corp = filter_input(INPUT_POST, 'corp');
            $email = filter_input(INPUT_POST, 'email');
            $zipcode = filter_input(INPUT_POST, 'zipcode');
            $owner = filter_input(INPUT_POST, 'owner');
            $phone = filter_input(INPUT_POST, 'phone');
            $binds = array(
                ":corp" => $corp,
                ":email" => $email,
                ":zipcode" => $zipcode,
                ":owner" => $owner,
                ":phone" => $phone
                    
            );
            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Data Added';
            } else {
                
            }
        }
 
        ?>
        
     
<center>
<!--Adds New information into the database-->
    <div id=wrapper>
          
    </div>
            <form method="post" action="#"> 
                <br/><br/>
                <b>Company Name:</b>
                <br/>
                <input type="text" value="" name="corp" autofocus="autofocus"/>
                <br/>
                <br/>
                <b>Email:</b>  
                <br/>
                <input type="text" value="" name="email" />
                <br/>
                <br/>
                <b>Zip Code:</b> 
                <br/>
                <input type="zipcode" value="" name="zipcode"/>
                <br/>
                <br/>
                <b>Owner:</b>  
                <br/>
                <input type="text" value="" name="owner" />
                <br/>
                <br/>
                <b>Phone:</b> 
                <br/>
                <input type="text" value="" name="phone" />
                <br/>
                <br/>
                <input type="submit" class="btn btn-default" value="Submit"/> <input type="button" class="btn btn-default" value="Cancel" onClick="location.href='Index.php'"/>
                                
            </form>
    <br/>
    <div class="box--add-message"><?php echo $results; ?></div>
        
        <script type="text/javascript">
            
            /* use this selector to grab html items by CSS selectors */
            var message = document.querySelector('.box--add-message');
            
            /* JavaScript function that will run a function after waiting */
            setTimeout(fadeAddMessage, 1000);
            setTimeout(hideAddMessage, 4000);
            
            /* custom JavaScript functions that will add a class to the selected HTML div */
            function hideAddMessage() {
                message.classList.add('hide');
            }
            
            function fadeAddMessage() {
                 message.classList.add('fade');
            }
            
        </script>
                    <br />
</center>
        
        

        