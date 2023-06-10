<?php 
    session_start();
    if(isset($_COOKIE['flag'])){ }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WelcomePage</title>
</head>
<body>
    <h2 align="center">Welcome To School Management System</h2>
    <table border="1" align="center" width=50% cellpadding="50">
        <tr>
            <td><h4><a href="signup.php">Sign Up</a></h4></td>
            <td><h4><a href="login.php">Login</a></h4></td>
            
        </tr>
    </table>
</body>
</html>