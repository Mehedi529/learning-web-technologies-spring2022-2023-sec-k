<?php
   session_start();


?>

<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
    <form method="POST" action="profileCheck.php" enctype="multipart/form-data">
<table border="1" align="center" width="400px">
        <tr>
            <th colspan="3" align="center">Profile</th>
        </tr>

        <tr>
            <td>Name</td>
            <td><input type="text" name="Name" value="" /></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="email" name="Email" value="" /></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td>
                <input type="Gender" name="Gender" value=""/>
            </td>
        </tr>

        <tr>
            <td>DOB</td>
            <td><input type="date" name="DOB" value="" /></td>
        </tr>

        <tr>
            <td>Blood_Group</td>
            <td>
            <select name="Blood_Group">
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

        <tr>
            <td>Photo</td>
            <td>
                <input type="file" name="Photo" value="" />
         </td>
        </tr>

        <tr>
            <td colspan="3" align="right" height="35px"><input type="submit" name="submit" value="Submit" />
                <input type="Reset" name="" value="Reset" />
            </td>
        </tr>
    </table>
</form>
<center>
    <a href="home.php">Previous</a>
</center>


</body>
</html>