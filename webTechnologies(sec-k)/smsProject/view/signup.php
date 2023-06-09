<?php 
    session_start();
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../asset/style.css">
    <title>Signup</title>
</head>
<body>
    <div id="signUp">
        <p width="50">SignUp</p>


        <form method="POST" action="../controller/signupCheck.php" enctype="">
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
    </div>
</body>
</html>