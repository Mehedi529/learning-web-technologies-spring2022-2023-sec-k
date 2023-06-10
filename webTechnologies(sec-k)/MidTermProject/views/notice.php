<?php

 session_start();


?>


<html lang="en">
<head>
  <title>Notice</title>
</head>
<body>       
        <h2>Notice</h2>
                <form method="POST" action="noticeCheck.php" enctype="multipart/form-data">
                    <table align="center" width="30%" cellpadding="6">
                        <tr>
                            <td>Send Notice to</td>
                        <td>
							<select name="sendNoticeTo">
								<option value="select">Select</option>
								<option value="students">Students</option>
                                <option value="teachers">Teachers</option>
                                <option value="all user">All user</option>
							</select>
						</td>
                        </tr>
                        <tr>
                            <td>Subject</td>
                            <td colspan="8">
                                <textarea name="subject" size="80" placeholder="Write your subject..."></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Notice</td>
                            <td colspan="8">
                                <textarea name="notice" rows="7", cols="60" placeholder="Write your notice..."></textarea>
                            </td>
                        </tr>
                        <tr>
                             <td colspan="7" align="center">
                                <input type="submit" name="submit" value="submit">
                                <input type="reset" value="Reset">
                             </td>
                        </tr>
                </table>
                </form>

<a href="home.php">Previous</a>
</body>
</html>