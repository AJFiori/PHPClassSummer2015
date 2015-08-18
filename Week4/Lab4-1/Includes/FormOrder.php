
<!-- Creates drop menu and can be searched by ASC or DESC -->
<form action="#" method="get">
<center>
        <br><br>
        <br>
        <label>Ascending Order</label><input type="radio" name="sortOrder" value="ASC" />||
        <label>Descending Order:</label><input type="radio" name="sortOrder" value="DESC" />

        <br><br>
      
        <label>Sort By:</label> 
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
</center>  
</form>