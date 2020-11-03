<?php

if(isset($_REQUEST['submit']))
{
    if($_POST['Email']=="")
    {   
        echo "nothing was inputed";   
    }
    else
    {
        echo "Name: ".$_POST['Email'];
    }
    
}

?>

<html>
<head>
    <title>HTML Form -Email</title>
</head>
<body>
    
    <form method="post" action="email.php">
        
        <fieldset style="font-family:Calibri;width:200px;height:100px">
            
            <legend><b>EMAIL</b></legend>
            <input type="email" name="Email">
            <button title="hint:Sample@example.com" style="color: blue; font-size: 12px;"><b>i</b></button>
            <hr>
            <input style="font-family:Calibri" type="submit" name="submit" value="Submit">
            
        </fieldset>
        
    </form>
    
</body>
</html>