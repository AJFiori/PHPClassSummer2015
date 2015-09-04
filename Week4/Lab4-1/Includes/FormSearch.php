
<!-- creates search feature where you can type and select what drop down you want -->
<link rel="stylesheet" type="text/css" href="style3.css">
<form action="#" method="get">
    <center> 
                <br/>
                <div class="Search">
                <label>Search Columns By:</label>
               <br/>
        <select class="btn btn-default" name="searchColumn">
            <option value="id">ID</option>
            <option value="corp">Corporation Name</option>
            <option value="incorp_dt">Incorporation Date</option>
            <option value="email">Email</option>
            <option value="zipcode">Zip Code</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>
        </select> 
         <br/><br/> 
        <input name="userSearch" type="search" autofocus="autofocus" />
        <br/><br/>
        <input type="hidden" name="action" value="search" />
        <input type="submit" class="btn btn-default" value="Submit" />
        <input type="reset" class="btn btn-default" value="Clear" onClick="location.href='view.php'" />
                </div>
    </center> 
</form>