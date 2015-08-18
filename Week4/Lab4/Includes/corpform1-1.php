
<form action="#" method="get">
    <fieldset>
        <legend>Atlas Corporation</legend>
        
        <label>Search Database:</label>
        <br/><br/>
        <label>Ascending Order:</label>
        <input type="radio" name="sortorder" value="ascensort" />
        <br/><br/>
        <label>Descending Order:</label>
        <input type="radio" name="sortorder" value="descensort" />
         <br/><br/>
        <label>Group By:</label>  
        <select name="groupby">
            <option value="corp">Corp</option>
            <option value="date">Date</option>
            <option value="email">Email</option>
            <option value="zipcode">Zip Code</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>            
        </select>
        <br/><br/>
        <input type="hidden" name="action" value="submit" />
        <input type="reset" value="Submit" />&nbsp;&nbsp;<input type="reset" value="Clear">
        
    </fieldset>    
</form>