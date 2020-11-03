<?php

if(isset($_REQUEST['submit']))
{
  if(empty($_POST['degree']))
{
  echo "Nothing was selected"; 
}
else
{
  $degree = $_POST['degree'];
  for($i = 0; $i < count($degree); $i++)
{
  echo "Degree: ".$degree[$i]."<br>";     
}    
}
   
}

?>

<html>
<head>
    <title>HTML Form -Degree</title>
</head>
<body>

    <form method="post" action="degree.php">

        <fieldset style="font-family:Calibri;width:220px;height:90px">
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSc"> BSc
            <input type="checkbox" name="degree[]" value="MSc"> MSc
            <hr>
            <input style="font-family:Calibri" type="submit" name="submit" value="Submit">
        </fieldset>

    </form>

</body>
</html>