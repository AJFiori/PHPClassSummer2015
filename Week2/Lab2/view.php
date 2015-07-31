<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title>Actor Database</title>
    </head>
    <body>
        <?php
        include './dbconnect.php';
        include './functions.php';
        $results = '';
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

<center>
        <div id="form">
            <h1>Actor Database</h1>
            <form method="post" action="#">
                First Name<br/><input type="text" value="" name="firstName" />
                <br/>
                <br/>
                Last Name<br/><input type="text" value="" name="lastName" />
                <br/>
                <br/>
                Date of Birth<br/><input type="date" value="" name="dob"/>
                <br/>
                <br/>
                Height<br/><input type="text" value="" name="height" />
                <br/>
                <br/>
                <input type="submit" value="Submit" />
                <input type="button" value="View Data"/>
                <input type="button" value="Search"/>
                <p><?php echo $results ?></p>
            </form>
        </div>

</center>

</body>
</html>