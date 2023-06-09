<?php

 session_start();


?>


<html lang="en">
<head>
  <script type="text/javascript" src="../asset/noticeScript.js"></script>
  <link rel="stylesheet" type="text/css" href="../asset/style.css">
  <title>Notice</title>
</head>
<body>       
        <h2>Notice</h2>
                <!-- <form method="POST" action="../controller/noticeCheck.php" enctype="multipart/form-data"> -->
                    <table id="notice" align="center" width="30%" cellpadding="6">
                        <tr>
                            <td>Send Notice to</td>
                        <td>
							<select name="sendNoticeTo" id="sendNoticeTo">
								<option value="select">Select</option>
								<option value="students">Students</option>
                                <option value="teachers">Teachers</option>
                                <option value="all user">All user</option>
							</select>
						</td>
                        </tr>
                        <tr>
				            <td colspan="2">
					           <span id="sn" class="user-error"></span>
				            </td>
			            </tr>


                        <tr>
                            <td>Subject</td>
                            <td colspan="8">
                                <textarea name="subject" id="subject" size="80" placeholder="Write your subject..."></textarea>
                            </td>
                        </tr>
                        <tr>
				            <td colspan="2">
					           <span id="s" class="user-error"></span>
				            </td>
			            </tr>
                        


                        <tr>
                            <td>Notice</td>
                            <td colspan="8">
                                <textarea name="notice" id="notice" rows="7", cols="60" placeholder="Write your notice..."></textarea>
                            </td>
                        </tr>
                        <tr>
				            <td colspan="2">
					           <span id="n" class="user-error"></span>
				            </td>
			            </tr>


                        <tr>
                             <td colspan="7" align="center">
                                <input type="submit" name="submit" id="submit" value="submit" onclick="regCheckValidation()">
                             </td>
                        </tr>
                </table>
                <!-- </form> -->

<a href="home.php">Previous</a>
</body>
</html>