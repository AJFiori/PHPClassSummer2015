
<!-- Creates drop menu and can be searched by ASC or DESC -->
<link rel="stylesheet" type="text/css" href="style3.css">
<form action="#" method="get">
    <center>   
        <br/>
        <center>
        <label>Ascending Order:</label>&nbsp;&nbsp;<input type="radio" name="sortOrder" value="ASC" />&nbsp;&nbsp;||&nbsp;&nbsp;
        <label>Descending Order:</label>&nbsp;&nbsp;<input type="radio" name="sortOrder" value="DESC" />
        </center>
       
        <br>
        <div class="Order">
                <label>Search By:</label>  
       <br/>
        <select class="btn btn-default" name="sortBy">
            <option value="id">ID</option>
            <option value="corp">Corporation Name</option>
            <option value="incorp_dt">Incorporation Date</option>
            <option value="email">Email</option>
            <option value="zipcode">Zip Code</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>
        </select>

        <br/>
        <br/>
        
        <input type="hidden" name="action" value="sort" />
        <input type="submit" class="btn btn-default" value="Submit" />
        <input type="reset" class="btn btn-default" value="Clear" onClick="location.href='view.php'" /> 
        </div>
</center> 
</form>
