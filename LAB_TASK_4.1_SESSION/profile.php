<?php

session_start();
$name = $_COOKIE['name'];
$email = $_COOKIE['email'];
$gender = $_COOKIE['gender'];
$date = $_COOKIE['date'];
                    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany - Profile</title>
</head>
<body>
    
    <table cellspacing="0" border="1" width="800px" align=center>
        <tr>

        <td >

                 <a href="dashboard.php"><img src="logo.png" alt="Logo"></a>

            </td>

            <td align="right">

            <pre>Logged in as <a href="profile.php"><?=$name?></a> | <a href="logout.php"> Logout</a>  </pre>           

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
                <fieldset align=left style="width:400px;height:260px;">
                <legend><b>PROFILE</b></legend>
                <table>
                   
                    <tr>
                        <td>         
                    
                    Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?=$name?>
                    <hr>
                    Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?=$email?>
                    <hr>
                    Gender &nbsp;&nbsp;&nbsp;&nbsp;:<?=$gender?>
                    <hr>
                    Date of Birth: <?=$date?>
                                    
                        </td>                       
                                              
                        <td>
                            <img src="user.png" alt="User" height="150px" width="150px"><br>
                            <pre>       <a href="profile_picture.php">Change</a></pre>
                            
                        </td>
                    </tr>
                    <tr><td colspan="2"><hr></td></tr>
                    <tr><td colspan="2"><a href="edit_profile.php">Edit Profile</a></td></tr>
                </table>
                </fieldset>
                
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