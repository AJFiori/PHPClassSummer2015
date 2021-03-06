<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style3.css">
        <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
        <title>Actor Database</title>
    </head>
    <body>
        
 <!-- Connects to the database and inputs info -->
      <?php
        include './dbconnect.php';
        include './functions.php';
        $results = "";
        if (isPostRequest()) {
            $db = getDatabase();
            $stmt = $db->prepare("INSERT INTO actors SET firstName = :firstName, lastName = :lastName,dob = :dob, height = :height");

            $firstName = filter_input(INPUT_POST, 'firstName');
            $lastName = filter_input(INPUT_POST, 'lastName');
            $dob = filter_input(INPUT_POST, 'dob');
            $height = filter_input(INPUT_POST, 'height');
            $binds = array(
                ":firstName" => $firstName,
                ":lastName" => $lastName,
                ":dob" => $dob,
                ":height" => $height
            );
            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Data Added';
            } else {
                
            }
        }
        
        ?>
      
    
<!--Header text and form outline -->

<center>
    
    <div id=wrapper>
        <div class="head">
            <h1>Actor Database</h1>
    </div>
    </div>
    <br/>
    <br/>
    <br/>
            <form method="post" action="#">
                First Name:  <input type="text" value="" name="firstName" autofocus="autofocus"/>
                <br/>
                <br/>
                Last Name:  <input type="text" value="" name="lastName" />
                <br/>
                <br/>
                Date of Birth:  <input type="date" value="" name="dob"/>
                <br/>
                <br/>
               Height:  <input type="text" value="" name="height" />
                <br/>
                <br/>
        <input type="submit"  value="Submit" class="btn btn-default"/>
        <input type="button"  value="View Data" class="btn btn-default" onClick="location.href='Data.php'"/>  
            </form>
    <br/>
    
<!-- displays error and disappears-->
            <?php include './includes/results.html.php';?>
</center>
                
</body>
</html>