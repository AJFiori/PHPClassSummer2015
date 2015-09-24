<!DOCTYPE html>
<!-- Web site host www.ajfiorineit.freeiz.com -->
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Address Book Manager</title>
<!-- Bootstrap/CSS -->
        <link rel="stylesheet" href="css/style3.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body>
 
        <?php
            require_once './includes/session-start.req-inc.php';
            
            include_once './functions/dbconnect.php';
            include_once './functions/login-function.php';
            include_once './functions/signupfunctions.php';
            include_once './functions/addfunctions.php';
            include_once './functions/updatedeletefunctions.php';
            include_once './functions/until.php'; 
            
              ?>
        
        <?php
                $view = filter_input(INPUT_GET, 'view');
                if ( isPostRequest() ) {

                        $email = filter_input(INPUT_POST, 'email');
                        $password = filter_input(INPUT_POST, 'pass');

                        if ( isValidUser($email, $password) ) {
                            $_SESSION['isValidUser'] = true;
                            header('Location: index.php?view=userdefault');

                        } 
                        
                        else 
                        {
                            if ( !isset($_SESSION['isValidUser']) || $_SESSION['isValidUser'] !== true )
                            {
                            $results = 'Invalid Login. Sorry, please try again';
                            }
                        }
                    }
        ?>
            
       

<br/><br/>
    <center>
    <div class="container">

      <div class="starter-template">
            <?php       

                if ( $view === 'add' ) 
                {
//add new item page
                    include './templates/add.html.php';
                } 
                else if (  $view === 'update' ) 
                {
//update item page
                    include './templates/update.html.php';
                }
                else if (  $view === 'delete' ) 
                {
//delete item page
                    include './templates/delete.html.php';
                }
                else if (  $view === 'signup' ) 
                {
//new user sign up page
                    include './templates/signup.html.php';
                }
                else if (  $view === 'userdefault' ) 
                {
//main user view page
                    include './templates/userdefault.html.php';
                }
                else if (  $view === 'read' ) 
                {
//user view of detailed address info and update/delete access
                    include './templates/read.html.php';
                }

                else
                {
// Default view for log in or csignup
                    include './templates/default.html.php';
                }

                ?>

                <?php 
//output of success or error messages
                include './includes/results.html.php'; 
                ?>
              
      </div>
    </div>
</center>
<!--Ends container-->
    </body>
</html>
