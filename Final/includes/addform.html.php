<div class="row">

<form method="post" action="#" enctype="multipart/form-data" class="navbar-form navbar-center">
    <div class="form-group">
        <table class="table">
            <tr>
                <td>
                    Group:
                </td>
                    <td>
                        <select name="selected_address_group" class="form-control">
                        <?php foreach ($addressGroups as $row): ?>
                        <option value="<?php echo $row['address_group_id']; ?>">
                        <?php echo $row['address_group']; ?>
                        </option>
                        <?php endforeach; ?>
                        </select>
                    </td>
            </tr>
        <br />


        <tr>
            <td>Full Name:</td><td><input type="text" name="fullname" value="<?php echo isset($_POST["fullname"]) ? $_POST["fullname"] : ''; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Email:</td><td><input type="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Address:</td><td><input type="text" name="address" value="<?php echo isset($_POST["address"]) ? $_POST["address"] : ''; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Phone:</td><td><input type="text" name="phone" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Web site:</td><td><input type="url" name="website" value="<?php echo isset($_POST["website"]) ? $_POST["website"] : ''; ?>" placeholder="http://www." class="form-control" /></td>
        </tr>
        <tr>
            <td>Birthday:</td><td><input type="date" name="birthday" value="<?php echo $viewdate; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Image:</td><td><input name="upfile" type="file" value="" class="btn btn-default" /></td>
        </tr>
        
        </table>
        <input type="submit" value="Submit" class="btn btn-default" />&nbsp;<input type="button" class="btn btn-default" value="Back" onClick="location.href='index.php?view=userdefault'"/>
    </div>
</form>

</div>