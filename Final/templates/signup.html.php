<?php

if ( isPostRequest() ) {

        $signupemail = filter_input(INPUT_POST, 'signup_email');
        $signuppassword = filter_input(INPUT_POST, 'signup_pass');
        
        if (!isItemInDB($signupemail, "email", "users"))
        {

            if ( doCreateUser($signupemail, $signuppassword) ) 
            {
                $results = 'New user created';
            } 
            else 
            {
                $results = '**Error creating user. Sorry, please try again.<br><br>Ensure email is valid and password includes only letters and numbers.**';
            }
        }
        else
        {
            $results = 'User already exists. Sorry, please try again.';
        }
        
    }
?>


<p><a href="?view=default" class="btn btn-primary">Return to Log In</a></p>
<hr>
<div class="SU">
<h1> Sign Up </h1>
</div>

<?php
include './includes/signupform.html.php';

?>

