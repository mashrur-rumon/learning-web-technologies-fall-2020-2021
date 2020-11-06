<?php

    if (isset($_POST['bloodGroup']) && !empty($_POST['bloodGroup'])) 
    {
        echo "group:".$_REQUEST["bloodGroup"] ;
    } 
    else 
    {
        echo "Must be select one";
    }
	
?>