<form action="#" method="get">
    <fieldset>
        <legend>Atlas Corporation</legend>
        
        <label>Search Columns:</label>
        <select name="groupby">
            <option value="corp">Corp</option>
            <option value="date">Date</option>
            <option value="email">Email</option>
            <option value="zipcode">Zip Code</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>            
        </select>
        <br/><br/>
        <label>Search Database:</label>
        <input name="searchby" type="search" placeholder="Search...." />
        <input name="searchby" value="data2" type="hidden" />
        <br/><br/>
        <input type="hidden" name="action" value="Submit" />
        <input type="submit" value="Submit" />
    </fieldset>            
</form>