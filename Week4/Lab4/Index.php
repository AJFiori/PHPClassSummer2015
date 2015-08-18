<!DOCTYPE html>
<!-- Main page layout with styling-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
        <title>Atlas Corporation</title>
    </head>
    <body>
      <br/>
    <center>
        <!--Header Image-->
    <img src="image/AC3.png" alt="AC" height="100" width="500">
    
        <br/>
    
<!--form list-->       
        <div class="srch">
            <form class="form-group" action="view.php" method="GET" name="search">
                <br/><br/>
                <b>Search:</b>
                <br/>
                <br/>
                <input type="text" value="" name="search" autofocus="autofocus"/>
                <br/>
                <br/>
        <select class="btn btn-default" name="searchby">
            <option  value="corp">Corp</option>
            <option  value="incorp_dt">Date</option>
            <option  value="email">Email</option>
            <option  value="zipcode">Zip Code</option>
            <option  value="owner">Owner</option>
            <option  value="phone">Phone</option>            
        </select>
                <br/><br/>
        <label>Ascending Order:</label>
        <input type="radio" name="sortorder" value="ascensort" />
        <br/>
        <label>Descending Order:</label>
        <input type="radio" name="sortorder" value="descensort" />
                <br/>
                <br/>

<input type="submit" class="btn btn-default" value="Submit"/> <input type="button" class="btn btn-default" name="searchby" value="Add Company" onClick="location.href='add.php'"/>
                <input type="submit" class="btn btn-default"  name="searchby" value="View All"/>   
            </form>
        </div>


                <br />
                    
</center>
    </body>
</html>