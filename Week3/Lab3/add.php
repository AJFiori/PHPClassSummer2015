<!DOCTYPE html>
<html>
    
    <!-- Needs Data-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title>Corps</title>
    </head>
    <body>
      <?php
        include './dbconnect.php';
        include './functions.php';
        $results = '';
        if (isPostRequest()) {
            $db = getDatabase();
            $stmt = $db->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = :incorp_dt,email = :email, zipcode = :zipcode, owner = :owner, phone = :phone");

            $corp = filter_input(INPUT_POST, 'corp');
            $incorp_dt = filter_input(INPUT_POST, 'incorp_dt');
            $email = filter_input(INPUT_POST, 'email');
            $zipcode = filter_input(INPUT_POST, 'zipcode');
            $owner = filter_input(INPUT_POST, 'owner');
            $phone = filter_input(INPUT_POST, 'phone');
            $binds = array(
                ":corp" => $corp,
                ":incorp_dt" => $incorp_dt,
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
    <div id=wrapper>
            <h1>Corp</h1>
    </div>
            <form method="post" action="#"> 
                Company Name:
                <br/>
                <input type="text" value="" name="corp" autofocus="autofocus"/>
                <br/>
                <br/>
                Email:  
                <br/>
                <input type="text" value="" name="email" />
                <br/>
                <br/>
                Zip Code: 
                <br/>
                <input type="zipcode" value="" name="zipcode"/>
                <br/>
                <br/>
                Owner:  
                <br/>
                <input type="text" value="" name="owner" />
                <br/>
                <br/>
                Phone: 
                <br/>
                <input type="text" value="" name="phone" />
                <br/>
                <br/>
                <input type="submit" value="Submit"/> <input type="button" value="Cancel" onClick="location.href='Index.php'"/>
               
                 
            </form>
                    <br />
</center>
        
        

        