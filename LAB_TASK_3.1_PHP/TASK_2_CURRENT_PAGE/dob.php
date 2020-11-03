<?php

if(isset($_REQUEST['submit']))
{
    if($_REQUEST['day']=="" or $_REQUEST['month']=="" or $_REQUEST['year']=="")
    {
        echo "Please input all the fields"; 
    }
    else
    { 
        echo "Date of Birth ".$_REQUEST['day']."/".$_REQUEST['month']."/".$_REQUEST['year']; 
    }
    
}

?>

<html>
<head>
    <title>HTML Form -Date of Birth</title>
</head>
<body>
    
    <form method="post" action="dob.php">
          
        <fieldset style="font-family:Calibri;width:200px;height:120px">
            
            <legend><b>DATE OF BIRTH</b></legend>
            <pre>  dd      mm     yyyy</pre>
            <input type="tel" name="day" size="2"><b> /</b>
            <input type="tel" name="month" size="2"><b> /</b>
            <input type="tel" name="year" size="4">
            <hr>  
            <input style="font-family:Calibri" type="submit" name="submit" value="Submit">
        </fieldset>
        
    </form>
    
</body>
</html>