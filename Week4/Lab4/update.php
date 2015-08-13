<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
        <title>Atlas Corporation</title>
    </head>
    <body>
    <center>
    <br/><br/>
<!--Header Image-->
    <img src="image/AC3.png" alt="AC" height="100" width="500">
    </center>
    
        <?php
        include './dbconnect.php';
        include './util.php';
        
        $results="";
        $db = getDatabase();
        
                
            if (isPostRequest()) {
                $id = filter_input(INPUT_GET, 'id');
                $corp = filter_input(INPUT_POST, 'corp');
                $email = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $owner = filter_input(INPUT_POST, 'owner');
                $phone = filter_input(INPUT_POST, 'phone');
            if($corp==""||$email==""||$zipcode==""||$owner==""||$phone==""){
                $results =  'Not Updated';
            }else {
                $stmt = $db->prepare("UPDATE corps SET corp = :corp, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone WHERE id=:id");
                $binds = array(
                ":corp" => $corp,
                ":email" => $email,
                ":zipcode" => $zipcode,
                ":owner" => $owner,
                ":phone" => $phone,
                ":id"=>$id
                );
            
            if ($stmt->execute($binds)) {
                $results = 'Record Updated';
            
                
            } else {
                
                $results =  'Not Updated';
             
            }
            }
            }
 
        ?>
<!--Adds Updated information into the database-->
    <center>
        <form method="POST" action="#">
          <br/><br/>
          <b>Company Name:</b>
                <br/>
                <input type="text" name="corp" autofocus="autofocus"/>
                <br/>
                <br/>
                <b>Email:</b>  
                <br/>
                <input type="text" name="email" />
                <br/>
                <br/>
                <b>Zip Code:</b> 
                <br/>
                <input type="zipcode" name="zipcode" />
                <br/>
                <br/>
                <b>Owner:</b>  
                <br/>
                <input type="text" name="owner" />
                <br/>
                <br/>
                <b>Phone:</b>
                <br/>
                <input type="text"  name="phone" />
                <br/>
                <br/>
                <input type="submit" class="btn btn-default" value="update"/>
        </form>
                <br/>
                <input type="button" class="btn btn-default" value="Cancel" onClick="location.href='Index.php'"/>
                <br/>
                <br/>
                <br/>
    <div class="box--add-message"><?php echo $results; ?></div>

    <!-- script to have the message disappear-->      
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
        <br/>
       
    </body>
</html>