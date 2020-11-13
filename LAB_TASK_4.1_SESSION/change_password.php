<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany - Change Password</title>
</head>
<body>
    
    <table cellspacing="0" border="1" width="800px" align=center>

        <tr>
 
            <td width=200px>

                 <a href="dashboard.php"><img src="logo.png" alt="Logo"></a>

            </td>

            <td align="right">

                Logged in as <a href="profile.php">bob</a> |
                <a href="logout.php">Logout</a>
                
            </td>

        </tr>

        <tr>
            
            <td height="300px" valign="top">
                <pre><b>  Account</b><hr width=230px></pre>
                
                <ul>
                    
                    <a href="dashboard.php"><li>Dashboard</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
                    <a href="profile_picture.php"><li>Change Profile Picture</li></a>
                    <a href="change_password.php"><li>Change Password</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
                </ul>            
            </td>
            
             <td width=600px align=center>
              
              <form action="change_password.php" method="post">
                <fieldset align=left style="width:400px;height:260px;">
                  
                  <legend><b>CHANGE PASSWORD</b></legend>
                  
                  <b>Current Password</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="cpassword"><br><br>
                  <b>New Password</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="npassword"><br><br>
                  <b>Retype New Password</b>&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="rnpassword">
                  <hr><input type="submit" name="submit" value="Submit">           
                  
                </fieldset>
               </form>
                
            </td>
            
        </tr>

        <tr>

            <td colspan="2" align="center">
                <p>Copyright &#169; 2017</p>
            </td>

        </tr>

    </table>
    
</body>
</html>


<?php

session_start();

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['npassword']) and $_COOKIE['password']==$_REQUEST['cpassword'] and $_REQUEST['npassword']==$_REQUEST['rnpassword']){
        
        setcookie('password', $_REQUEST['npassword'], time()+86400, '/');
        echo $_COOKIE['password'];
    }
    
    else{
        
        echo "Error!";
        
    }
    
}

?>