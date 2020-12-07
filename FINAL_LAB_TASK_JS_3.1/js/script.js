"use strict"

function genderValidation()
{
    
    if(document.getElementById("maleId").checked|| document.getElementById("femaleId").checked|| document.getElementById("othersId").checked)
    {
        
        alert("Gender Selected");   
    }
    
    else
    {
        
        alert("Please Select Gender");
        
    }
    
}

