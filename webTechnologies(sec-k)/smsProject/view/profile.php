<?php
   session_start();


?>

<html lang="en">
<head>
    <script type="text/javascript" src="../asset/profileScript.js"></script>
    <link rel="stylesheet" type="text/css" href="../asset/style.css">
    <title>Profile</title>
</head>
<body>
    <!-- <form method="POST" action="../controller/profileCheck.php" enctype="multipart/form-data"> -->
<table id="profile1" border="1" align="center" width="400px">
        <tr >
            <th colspan="3" align="center">Profile</th>
        </tr>
    <div >
        <tr>
            <td>Name</td>
             <td>
                <input type="text" name="Name" id="name" value="" />
                <span  class="user-error"></span>
            </td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="email" name="Email" id="email" value="" /></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td>
                <input type="Gender" name="Gender" id="gender" value=""/>
            </td>
        </tr>

        <tr>
            <td>DOB</td>
            <td><input type="date" name="DOB" id="dob" value="" /></td>
        </tr>

        <tr>
            <td>Blood_Group</td>
            <td>
            <select name="Blood_Group" id="blood_group">
                <option value="select">select</option>
                <option value="A+">A+</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
                <option value="AB-">AB-</option>
            </select>
            </td>
        </tr>

        <tr>
            <td>Class</td>
            <td>
            <input type="Class" name="Class" value="" />
            </td>
        </tr>

    </div>
        
        <tr>
            <td colspan="3" align="right" height="35px"><input type="submit" name="submit" id="submit" value="submit" onclick="profileCheckValidation()" >
            </td>
        </tr>
    </table>

<!-- </form> -->
<center>
    <a href="home.php">Previous</a>
</center>


</body>
</html>