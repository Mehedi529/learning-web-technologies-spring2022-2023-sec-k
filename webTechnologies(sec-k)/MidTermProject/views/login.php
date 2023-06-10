<?php 
    session_start();
    //print_r($_REQUEST);
    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == 'error'){
            echo "Invalid username/password";
        }
    }    
?>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
    <fieldset width="50px">
        <legend width="50px">Login</legend>
        <form method="POST" action="../controllers/loginCheck.php">
        <table>
        <tr>
                    <td align="right">Username:</td>
                    <td><input type="text" name="username" value="" /></td>
        </tr>
        <tr>
                    <td align="right">Password:</td>
                    <td><input type="password" name="password" value="" /></td>
        </tr>
        <tr>
                    <td align="right"></td>
                    <td><input type="submit" name="submit" value="Submit" />
                    <a href="index.php">Forgot Password</a></td>
        </tr>
        </table>
        </form>

    </fieldset>
</body>
</html>