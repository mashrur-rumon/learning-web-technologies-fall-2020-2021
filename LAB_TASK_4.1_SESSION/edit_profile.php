<?php

session_start();
$name = $_COOKIE['name'];
$email = $_COOKIE['email'];
$gender = $_COOKIE['gender'];
$date = $_COOKIE['date'];

if(isset($_REQUEST['submit']))
{
    
    if(!empty($_REQUEST['name']) and !empty($_REQUEST['email']) and !empty($_REQUEST['gender']) and !empty($_REQUEST['date']))
    {
        
        setcookie('name', $_REQUEST['name'], time()+86400, '/');
        setcookie('email', $_REQUEST['email'], time()+86400, '/');
        setcookie('gender', $_REQUEST['gender'], time()+86400, '/');
        setcookie('date', $_REQUEST['date'], time()+86400, '/');
        
    }
    
    else
    {
        
        echo "Please fill all info";
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany - Edit Profile</title>
</head>
<body>
    
    <table cellspacing="0" border="1" width="800px" align=center>

        <tr>

            <td>

                 <a href="dashboard.php"><img src="logo.png" alt="Logo"></a>

            </td>



            <td align="right">

                <pre>Logged in as <a href="profile.php"><?=$name?></a> | <a href="logout.php">Logout</a></pre>
                

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
              
               <form action="edit_profile.php" method="post">
                   
               <fieldset align=left style="width:400px;height:260px;">
                       
                       <legend><b>EDIT PROFILE</b></legend>
                       
                       Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name" value="<?=$_COOKIE['name']?>"><hr>
                       Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email"><button title="hint:Sample@example.com"><b>i</b></button><hr>
                       Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                       <input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female
                            <input type="radio" name="gender" value="Other"> Other
                            <hr>
                        Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="date" value="<?=$_COOKIE['date']?>"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (dd/mm/yyyy) <hr>
                        
                        <input type="submit" name="submit" value="Submit">
                       
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