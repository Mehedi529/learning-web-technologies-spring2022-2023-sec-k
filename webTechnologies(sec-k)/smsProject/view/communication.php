<?php

  session_start();

?>


<html lang="en">
<head>
  <script type="text/javascript" src="../asset/comScript.js"></script>
  <link rel="stylesheet" type="text/css" href="../asset/style.css">
  <title>Communication</title>
</head>
<body>
  <h3>COMMUNICATION</h3>
  <!-- <form method="POST" action="../controller/communicationCheck.php" enctype="multipart/form-data"> -->
    <table id="communication" align="center">

      <tr>
        <td>YourName</td>
        <td><input type="text" name="name" id="name" value=""></td>
      </tr>

      <tr>
				  <td colspan="2">
				   	<span id="n" class="user-error"></span>
				  </td>
		  </tr>
      

      <tr>
       <td>YourEmail</td>
       <td><input type="email" name="email" id="email" value=""></td>
      </tr>
      <tr>
				  <td colspan="2">
				   	<span id="e" class="user-error"></span>
				  </td>
		  </tr>

      <tr>
        <td>Subject</td>
        <td><input type="text" name="subject" id="subject" value=""></td>
      </tr>
      <tr>
				  <td colspan="2">
				   	<span id="s" class="user-error"></span>
				  </td>
		  </tr>

      <tr>
        <td>Message</td>
        <td><textarea name="message" id="message" rows="4" cols="30"></textarea></td>
      </tr>
      <tr>
				  <td colspan="2">
				   	<span id="m" class="user-error"></span>
				  </td>
		  </tr>

      <tr>
        <td colspan="2" align="center">
        <input type="submit" value="Submit" name="submit" id="submit" onclick="communicationValidation()">
        </td>
      </tr>

    </table>
  <!-- </form> -->
<a href="home.php">Previous</a>
</body>
</html>