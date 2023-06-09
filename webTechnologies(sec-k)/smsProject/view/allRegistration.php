<?php

    require_once('../model/db.php');
    session_start();
	if(isset($_COOKIE['flag'])){

?>


<html lang="en">
    <head>
	    <link rel="stylesheet" type="text/css" href="../asset/style.css">
	</head>
<body>
	 <center>
<table id="allRegistration" border= 1 >
                            <tr>
								<th>FirstName</th>
								<th>LastName</th>
								<th>StudentId</th>
								<th>DOB</th>
								<th>Email</th>
								<th>MoblileNumber</th>
								<th>Gender</th>
								<th>Address</th>
								<th>Class</th>
							</tr>

<?php
	$con = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "select * from registration";
	$result = mysqli_query($con, $sql);

	while($data =mysqli_fetch_assoc($result)){ ?>


		<tr>
		    <td><?=$data['firstName']?></td>
			<td><?=$data['lastName']?></td>
			<td><?=$data['studentId']?></td>
			<td><?=$data['dob']?></td>
			<td><?=$data['email']?></td>
			<td><?=$data['mobileNumber']?></td>
			<td><?=$data['gender']?></td>
			<td><?=$data['address']?></td>
			<td><?=$data['class']?></td>
		</tr>


	<?php  }   ?>

<?php  }   ?>



</table>
</center>
</body>
</html>
<a href=record.php>previous</a>
