<?php if ( isset($results) ) : ?>
    <h2 class="Error"><?php echo $results; ?></h2>
<?php endif; ?>

     <?php if ( isset($errors) && count($errors) > 0 ) : ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                <h3 class="Error2"><li><?php echo $error; ?></li></h3>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>