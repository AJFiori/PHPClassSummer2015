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
        include './functions.php';
        
        
        $db = getDatabase();
        $results="";
        
        if (isPostRequest()) {
                
                
                $stmt = $db->prepare("UPDATE corps set corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone where id = :id");
                $id = filter_input(INPUT_POST, 'id');
                $corp = filter_input(INPUT_POST, 'corp');
                $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
                $email = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $owner = filter_input(INPUT_POST, 'owner');
                $phone = filter_input(INPUT_POST, 'phone');
                
                
                $binds = array(
                    ":id" => $id,
                    ":corp" => $corp,
                    ":incorp_dt" => $incorp_dt,
                    ":email" => $email,
                    ":zipcode" => $zipcode,
                    ":owner" => $owner,
                    ":phone" => $phone );
                
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $results = 'Record updated';
                   
                }}
             else {
                $id = filter_input(INPUT_GET, 'id');
                $stmt = $db->prepare("SELECT * FROM corps where id = :id");
                $binds = array(
                    ":id" => $id
                );
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $results = $stmt->fetch(PDO::FETCH_ASSOC);
                }
                if ( !isset($id) ) {
                    die('Record not found');
                }
                $corp = $results['corp'];
                $incorp_dt = $results['incorp_dt'];
                $email = $results['email'];
                $zipcode = $results['zipcode'];
                $owner = $results['owner'];
                $phone = $results['phone'];
            }
        
 
        ?>
<!--Adds Updated information into the database-->
    <center>
        <form method="POST" action="#">
          <br/><br/>
          <b>Company Name:</b>
                <br/>
            <input type="text" value="<?php echo $corp; ?>" name="corp" autofocus="autofocus"/>
                <br/>
                <br/>
                <b>Email:</b>  
                <br/>
            <input type="text" value="<?php echo $email; ?>" name="email" />
                <br/>
                <br/>
                <b>Zip Code:</b> 
                <br/>
            <input type="zipcode" value="<?php echo $zipcode; ?>" name="zipcode" />
                <br/>
                <br/>
                <b>Owner:</b>  
                <br/>
            <input type="text" value="<?php echo $owner; ?>" name="owner" />
                <br/>
                <br/>
                <b>Phone:</b>
                <br/>
            <input type="text" value="<?php echo $phone; ?>"  name="phone" />
                <br/>
                <br/>
            <input type="hidden" value="<?php echo $id; ?>" name="id" /> 
            <input type="submit" class="btn btn-default" value="Update" />
            <input type="button" class="btn btn-default" value="Cancel" onClick="location.href='Index.php'"/>
        </form> 
    </center>
                <br/>
                <br/>
<center>
    <div class="box--add-message"><?php echo $results; ?></div>

    <!-- script to have the message disappear-->      
        <script type="text/javascript">
            
            /* use this selector to grab html items by CSS selectors */
            var message = document.querySelector('.box--add-message');
            
            /* JavaScript function that will run a function after waiting */
            setTimeout(fadeAddMessage, 1000);
            setTimeout(hideAddMessage, 8000);
            
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