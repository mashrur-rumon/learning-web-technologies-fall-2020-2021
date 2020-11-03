<?php

$degree = "";
if(isset($_REQUEST['submit']))
{
    if(isset($_REQUEST['degree']))
    {
        $degree = "";
        $degree_arr = $_REQUEST['degree'];
        for($i = 0; $i < count($degree_arr); $i++)
        {
          $degree = $degree.$degree_arr[$i].",";   
        }
          $degree = rtrim($degree, ",");
    }
    else
    {
        $degree = "Nothing was selected";
    }  
}
else
{ 
    $degree = "";   
}

?>

<head>
    <title>HTML Form - Degree</title>
</head>
<body>

    <form method="post" action="degree.php">

        <fieldset style="font-family:Calibri;width:230px;height:120px"> 

            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSc"> BSc
            <input type="checkbox" name="degree[]" value="MSc"> MSc
            <hr>
            <input type="text" name="deg" value="<?=$degree?>">

            <br><br>
            <input style="font-family:Calibri" type="submit" name="submit" value="Submit">
        </fieldset>

    </form>

</body>

</html>