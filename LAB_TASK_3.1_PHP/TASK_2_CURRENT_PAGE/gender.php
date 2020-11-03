<?php

if(isset($_REQUEST['submit']))
{
  if (isset($_POST['gender'])){echo "Gender: ".$_POST['gender'];
}        
else
{
  echo "nothing was selected.";
}
  
}

?>

<html>
<head>
     <title>HTML Form - Gender</title>
</head>
<body>
    
    <form method="post" action="gender.php">
        
        <fieldset style="font-family:Calibri;width:220px;height:90px">
            <legend><b>GENDER</b></legend>
            <input type="radio" name="gender" value="Male" > Male 
		    <input type="radio" name="gender" value="Female"> Female
		    <input type="radio" name="gender" value="Other" > Other <hr>  
            <input style="font-family:Calibri" type="submit" name="submit" value="Submit">
        </fieldset>
        
    </form>
    
</body>
</html>