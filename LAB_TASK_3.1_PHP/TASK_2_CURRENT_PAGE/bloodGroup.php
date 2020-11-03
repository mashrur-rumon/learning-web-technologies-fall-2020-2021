<?php

if(isset($_REQUEST['submit']))
{
  echo "Blood Group: ".$_REQUEST['bloodGroup'];   
}

?>

<html>
<head>
    <title>HTML Form -Blood Group</title>
</head>
<body>

    <form method="post" action="bloodGroup.php">
        
        <fieldset style="font-family:Calibri;width:200px;height:90px">
            
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bloodGroup">
				<option value="A+"selected>A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+" >O+</option>
				<option value="O-">O-</option>
			</select>
			<hr>
   
       <input  style="font-family:Calibri" type="submit" name="submit" value="Submit">
        </fieldset>
        <br>  
        
    </form>
    
</body>
</html>