<?php 
    session_start();
    if(isset($_COOKIE['flag'])){ 

?>

    <html lang="en">
        <head>
        <title>Home Page </title>
        </head>
        <body>
            <table border="1" align="center" width="400px">
                <tr>
                    <th colspan="3" align="left" width 100px>
                    
                    <h1>
                    School Management System
                    </h1>
                    
                         <p align="Right">
				         <a href="login.php"> Login</a> | 			
				         <a href="signup.php"> SignUp</a> | 			
				         <a href="logout.php" >Logout</a> | 			
			             </p> 	

                    </th>
                    
                </tr>

                <tr align="left" height="300px">
                    <td>
                        <h3>
                            
                            <ul>
                                <li>
                                    <a href="profile.php">Profile</a>
                                </li>
                                <li>
                                    <a href="admission.php">Admission</a>
                                </li>
                                <li>
                                    <a href="record.php">Record</a>
                                </li>
                                <li>
                                    <a href= "communication.php">Communication</a>
                                </li>
                                <li>
                                    <a href="notice.php">Notice</a>
                                </li>
                                <li>
                                    <a href="importantLinks.php">Important Links</a>
                                </li>
                            </ul>
                        </h3>
                    </td>

                    
                </tr>

 
            </table>
        </body>
    </html>

<?php
    }else{
        header('location: login.php');
    }
?>