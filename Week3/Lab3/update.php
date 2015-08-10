<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Corps</title>
    </head>
    <body>
        <?php
        
        include './dbconnect.php';
        include './functions.php';
        
        $results='';
        $db = getDatabase();
        
                
            if (isPostRequest()) {
                $corp = filter_input(INPUT_POST, 'corp');
                $email = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $owner = filter_input(INPUT_POST, 'owner');
                $phone = filter_input(INPUT_POST, 'phone');
                $stmt = $db->prepare("UPDATE corps SET corp = :corp, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone WHERE id=:id");
                $binds = array(
                ":corp" => $corp,
                ":email" => $email,
                ":zipcode" => $zipcode,
                ":owner" => $owner,
                ":phone" => $phone
                );
            
            if ($stmt->execute($binds)) {
                $results = 'Record Updated';
            
                
            } else {
                
                $results =  'Not Updated';
             
            }
            }
        
 
        ?>
        
    <center>
        <form method="POST" action="#">            
          Company Name:
                <br/>
                <input type="text" name="corp" autofocus="autofocus"/>
                <br/>
                <br/>
                Email:  
                <br/>
                <input type="text" name="email" />
                <br/>
                <br/>
                Zip Code: 
                <br/>
                <input type="zipcode" name="zipcode" />
                <br/>
                <br/>
                Owner:  
                <br/>
                <input type="text" name="owner" />
                <br/>
                <br/>
                Phone: 
                <br/>
                <input type="text"  name="phone" />
                <br/>
                <br/>
                <input type="submit" value="update"/>
        </form>
                <br/>
                <input type="button" value="Cancel" onClick="location.href='Index.php'"/>
                <br/>
                <br/>
                <?php echo $results ?>
    </center>
        <br/>
       
    </body>
</html>