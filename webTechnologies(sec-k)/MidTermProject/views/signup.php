<?php 
    session_start();
?>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>
    
       <fieldset width="50">
        <legend width="50">SignUp</legend>


        <form method="POST" action="../controllers/signupCheck.php" enctype="">
            <table>
            <tr>
                    <td align="right">Name:</td>
                    <td><input type="text" name="name" value="" /></td>
                </tr>
                <tr>
                    <td align="right">Username:</td>
                    <td><input type="text" name="username" value="" /></td>
                </tr>
                <tr>
                    <td align="right">Password:</td>
                    <td><input type="password" name="password" value="" /></td>
                </tr>
                <tr>
                    <td align="right">User:</td>
                    <td><input type="user" name="user" value="" /></td>
                </tr>
                <tr>
                    <td align="right">Email:</td>
                    <td><input type="email" name="email" value="" /></td>
                </tr>
                <tr>
                    <td align="right"></td>
                    <td><input type="submit" name="submit" value="Submit" /></td>
                    <td></td>
                </tr>
            </table>
        </form>
       </fieldset>
</body>
</html>