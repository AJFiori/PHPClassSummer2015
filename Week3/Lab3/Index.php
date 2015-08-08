<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
        <title>Corps</title>
    </head>
    <body>
       
<center>
    
            <h1>Corp</h1>
    
            <form method="get" action="view.php">
                Search:
                <br/>
                <br/>
                <input type="text" value="" name="search" autofocus="autofocus"/>
                <br/>
                <br/>
               
                <input type="submit" name="searchby"value="Name"/>
                <input type="submit" name="searchby" value="Zip Code"/>
                <input type="submit" name="searchby" value="Owner"/>
                <br/>
                <br/>
                <input type="button" name="searchby" value="Add Company" onClick="location.href='add.php'"/>
                <input type="submit" name="searchby" value="View All"/>   
            </form>
                <br />
                    

</center>
    </body>
</html>