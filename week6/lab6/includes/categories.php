
<link rel="stylesheet" href="../css/style3.css">
<link rel="stylesheet" href="../css/bootstrap.css">


<p><?php echo getCartCount(); ?>  items in cart</p>

<?php if ( isset($allCategories) ) : ?>
<center>
    <table class="table table-striped">
        <thead>
                <tr> 
    <?php foreach ($allCategories as $row): ?>
                    <th>All Categories:</th>
                    <td><a href="?cat=<?php echo $row['category_id']; ?>"><?php echo $row['category']; ?></a></td>
                       
                </tr>
        </thead>
    <?php endforeach; ?> 
    </table>    
</center>
<?php endif; ?>
