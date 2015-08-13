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
       
<center>
    <br/><br/>
<!--Header Image-->
    <img src="image/AC3.png" alt="AC" height="100" width="500">
    
<!--form list-->       
        <div class="srch">
            <form method="get" action="view.php">
                <br/><br/>
                <b>Search:</b>
                <br/>
                <br/>
                <input type="text" value="" name="search" autofocus="autofocus"/>
                <br/>
                <br/>
        <select type="submit" class="btn btn-default" name="searchby">
            <option  value="corp">Corp</option>
            <option  value="incorp_dt">Date</option>
            <option  value="email">Email</option>
            <option  value="zipcode">Zip Code</option>
            <option  value="owner">Owner</option>
            <option  value="phone">Phone</option>            
        </select>
                
                <br/>
                <br/>

<input type="submit" class="btn btn-default" name="searchby" value="Submit"/> <input type="button" class="btn btn-default" name="searchby" value="Add Company" onClick="location.href='add.php'"/>
                <input type="submit" class="btn btn-default"  name="searchby" value="View All"/>   
            </form>
        </div>


                <br />
                    

</center>
    </body>
</html>