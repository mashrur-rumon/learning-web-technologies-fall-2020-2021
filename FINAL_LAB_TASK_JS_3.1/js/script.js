"use strict"

function emailValidation()
{
    
    let data = document.getElementById('emailId').value;
    
    if (data === "") 
    {
        
        window.alert('Email is empty!');
        
    }
    
}

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

