<?php

if(isset($_REQUEST['submit']))
{
    if($_POST['Name']=="")
    {
      echo "nothing was inputed"; 
    }
    else
    {
      echo "Name: ".$_POST['Name'];
    }
     
}

?>

<html>
<head>
    <title>HTML Form -Name</title>
</head>
<body>
    
    <form method="post" action="name.php">
        
    <fieldset style="font-family:Calibri;width:200px;height:100px"> 
        <legend><b>NAME</b></legend>
        <input type="text" name="Name"> <hr>
        <input style="font-family:Calibri" type="submit" name="submit" value="Submit">
            
    </fieldset>  
        
    </form>
    
</body>
</html>