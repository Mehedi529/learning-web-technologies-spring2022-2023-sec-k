<?php 
    session_start();
    if(isset($_COOKIE['flag'])){ }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WelcomePage</title>
    <link rel="stylesheet" type="text/css" href="../asset/style.css">
</head>
<body>
    <div id="div">
    <h2 id="h2" align="center">Welcome To School Management System</h2>
    <table id="table" align="center" width=25% cellpadding="25">
        <tr>
            <td><h4><a href="signup.php">Sign Up</a></h4></td>
            <td><h4><a href="login.php">Login</a></h4></td>
            
        </tr>
    </table>
    </div>
</body>
</html>