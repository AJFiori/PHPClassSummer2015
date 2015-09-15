<?php if (isset($results3)) : ?>
        <h2><?php echo $results3; ?></h2>
 <?php endif; ?>

<div class="box--add-message"><?php echo $results3; ?></div>

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