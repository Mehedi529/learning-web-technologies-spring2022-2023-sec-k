<?php

  session_start();

?>


<html lang="en">
<head>
  <title>Communication</title>
</head>
<body>
  <h3>COMMUNICATION</h3>
  <form method="POST" action="communicationCheck.php" enctype="multipart/form-data">
    <table align="center">

      <tr>
        <td>YourName</td>
        <td><input type="text" name="name" value=""></td>
      </tr>

      <tr>
       <td>YourEmail</td>
       <td><input type="email" name="email" value=""></td>
      </tr>

      <tr>
        <td>Subject</td>
        <td><input type="text" name="subject" value=""></td>
      </tr>

      <tr>
        <td>Message</td>
        <td><textarea name="message" rows="4" cols="30"></textarea></td>
      </tr>

      <tr>
        <td colspan="2" align="center">
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset">
        </td>
      </tr>

    </table>
  </form>
<a href="home.php">Previous</a>
</body>
</html>