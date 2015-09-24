<?php

    require_once 'includes/session-start.req-inc.php';
    require_once 'includes/access-required.html.php';
    //echo $_SESSION['currentUserID'];

    $currentUserID = $_SESSION['currentUserID'];
 
    $userView = filter_input(INPUT_GET, 'user_view');
?>
<div class ="AM">
    <nav>
        <ul class="nav nav-pills nav-justified">
                                                  
        <?php            
            if ( isset($_SESSION['isValidUser']) &&  $_SESSION['isValidUser'] === true ) 
            {
                include './templates/links.html.php';
            }            
        ?>
        </ul>
        <br/><br/>

    </nav>
 </div> 
<br/>
<div class="WTOS"
<h1 class="cover-heading">Welcome To Address Manager!, <?php echo $_SESSION['currentUserEmail']; ?></h1>
</div>
<hr>

<?php       

                if ( $userView === 'read' ) 
                {
//user view of detailed address info and update/delete access
                    include './templates/read.html.php';
                } 
                else if (  $userView === 'update' ) 
                {
//user access to update item
                    include './templates/update.html.php';
                }
                else if (  $userView === 'delete' ) 
                {
//user access to delete item
                    include './templates/delete.html.php';
                }

                else
                {
// Default view for full address book
                    include './includes/displayuseraddresses.php';
                }

?>


