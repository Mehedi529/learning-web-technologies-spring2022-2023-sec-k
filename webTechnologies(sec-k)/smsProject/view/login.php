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
    <link rel="stylesheet" type="text/css" href="../asset/style.css">
    <title>Login Page</title>
</head>
<body>
    <div id="login">
    <p width="50px">Login</p>
        <form method="POST" action="../controller/loginCheck.php" enctype="">
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

    </div>
</body>
</html>