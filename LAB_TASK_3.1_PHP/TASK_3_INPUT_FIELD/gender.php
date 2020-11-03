<?php

    $gender = "";
    if (isset($_REQUEST['submit']))
    {
    $gender = $_REQUEST['gender'];
    }
    else
    {
    $gender = "";
    }

?>

<head>
    <title>HTML Form - Gender</title>
</head>
<body>

    <form method="post" action="gender.php">
        
        <fieldset style="font-family:Calibri;width:220px;height:120px"> 
            
          <legend><b>GENDER</b></legend>
          <input type="radio" name="gender" value="Male" > Male 
		  <input type="radio" name="gender" value="Female"  > Female
		  <input type="radio" name="gender" value="Other" > Other <hr> 
          <input type="text" name="field" value="<?=$gender?>">
        
        <br> <br>
        <input style="font-family:Calibri" type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
    
</body>
</html>