<div class="AddrBook"
<h4>Address Book</h4>
</div>
<br/>

<?php

    $addressGroups = getAddressGroups();
    $sortBy = 'fullname';
    $displayUserAddressInfo = getUserAddresses($currentUserID, $sortBy);

include 'includes/searchsortform.html.php';

?>
       
<?php   
        //narrow display to only chosen category or search by calling different function and filling same array
        //or search for specific text in a given field
        if (isset($selectedAddressGroupId))
        {
            $displayUserAddressInfo = getUserAddressesSortedForOneGroup($currentUserID, $selectedAddressGroupId, $sortBy);
        }
        if ((isset($searchIndex)))
        {
            $displayUserAddressInfo = searchDatabase($currentUserID, $searchIndex, $searchField) ;
        }
        if ((isset($sortIndex)))
        {
            $displayUserAddressInfo = getUserAddresses($currentUserID, $sortIndex) ;
        }
        
        
        if ( isset($displayUserAddressInfo) && count($displayUserAddressInfo) > 0 ) : ?>

<div class="row">
        <table class="table">
            <td><b>Name:</b></td>
            <td><b>Address:</b></td>
            <td><b>E-mail:</b></td>
            <td><b>Phone:</b></td>
            <td> </td>
            <?php foreach ($displayUserAddressInfo as $row): ?>
                <tr>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td>
<form method="post" action="?view=userdefault&user_view=read&view_address_id=<?php echo $row['address_id']?>">
                            <input type="submit" value="View Detail" class="btn btn-default" />
                        </form>
                    </td>
                </tr>    
            <?php endforeach; ?>
        </table>
    </div>


 <?php else: ?> 
<div class="Error">
        <h2>No Addresses Found</h2> 
</div>
<?php endif; ?>