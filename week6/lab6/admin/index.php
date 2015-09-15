<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/style3.css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <title></title>
    </head>
    <body>
        <?php
        
            require_once '../includes/session-start.php';
            
            include_once '../functions/dbConnect.php';
            include_once '../functions/loginFunction.php';
            include_once '../functions/until.php';
            $results3 = '';
        
            if ( isPostRequest() ) {
                
                $email = filter_input(INPUT_POST, 'email');
                $password = filter_input(INPUT_POST, 'password');
                
                if ( isValidUser($email, $password) ) {
                    $_SESSION['isValidUser'] = true;                    
                } else {
                    $results = 'Sorry please try again';
                }
               
            }
            
            
            if ( isset($_SESSION['isValidUser']) &&  $_SESSION['isValidUser'] === true ) {
                include '../includes/admin-links.html.php';
            }
            
        ?>
        
        <?php include '../includes/loginform.html.php'; ?>
        <br/><br/>
        <?php include '../includes/results.html.php'; ?>
    </center>
    </body>
</html>
