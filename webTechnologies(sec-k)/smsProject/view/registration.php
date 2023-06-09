<?php
  
  session_start();

?>

<html lang="en">
<head>
      <script type="text/javascript" src="../asset/regScript.js"></script>
      <link rel="stylesheet" type="text/css" href="../asset/style.css">
      <title>Registration Form</title>
</head>
 
<body>
      <h3>REGISTRATION FORM</h3>
    <!-- <form method="post" action="../controller/registrationCheck.php" enctype="multipart/form-data"> -->
        <table id="registrationForm" align="center" cellpadding = "10">
            <tr>
                <td>FirstName</td>
                <td><input type="text" name="firstName" id="firstName" maxlength="30"/></td>
            </tr>
            <tr>
				<td colspan="2">
					<span id="fn" class="user-error"></span>
				</td>
			  </tr>

        <tr>
        <td>LastName</td>
        <td>
            <input type="text" name="lastName" id="lastName" maxlength="30"/>
        </td>
        </tr>
        <tr>
				<td colspan="2">
					<span id="ln" class="user-error"></span>
				</td>
		</tr>




        <tr>
            <td>Student_Id</td>
            <td>
                <input type="number" name="studentId" id="studentId" maxlength="12" />
            </td>
        </tr>
        <tr>
				   <td colspan="2">
					   <span id="si" class="user-error"></span>
				   </td>
		    </tr>


        <tr>
        <td>DOB</td> 
        <td><input type="date" name="dob" id="dob" value="" /></td>
        </tr>
        <tr>
				<td colspan="2">
					<span id="d" class="user-error"></span>
				</td>
		</tr>
    

        <tr>
        <td>Email</td>
        <td><input type="email" name="email" id="email" maxlength="100" /></td>
        </tr>
        <tr>
				<td colspan="2">
					<span id="e" class="user-error"></span>
				</td>
		</tr>

        <tr>
        <td>Mobile_Number</td>
        <td>
        <input type="number" name="mobileNumber" id="mobileNumber" maxlength="11" />
        </td>
        </tr>
        <tr>
				<td colspan="2">
					<span id="mn" class="user-error"></span>
				</td>
		</tr>

        <tr>
        <td>Gender</td>
        <td>            
                    <input type="radio" name="gender" id="gender" value="Male" /> Male
                    <input type="radio" name="gender" id="gender" value="Female"/> Female
                    <input type="radio" name="gender" id="gender" value="Other"/> Other 
        </td>
        </tr>
        <tr>
				<td colspan="2">
					<span id="g" class="user-error"></span>
				</td>
		</tr>
    

    <tr>
    <td>Address <br /><br /><br /></td>
    <td><textarea name="address" id="address" rows="4" cols="30"></textarea></td>
    </tr>
    <tr>
				<td colspan="2">
					<span id="a" class="user-error"></span>
				</td>
	</tr>

    <tr>
    <td>Grade</td>
    <td><select name="class">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </td>
    </tr>
    

    <tr>
    <td colspan="2" align="center">
    <input type="submit" value="Submit" id="submit" name="submit" onclick="regCheckValidation()">
    </td>
    </tr>
    </table>
<!-- </form> -->
<a href="admission.php">Previous</a>
</body>
</html>