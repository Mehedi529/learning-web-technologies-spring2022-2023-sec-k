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
<table id="allProfile" border= 1 >
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>DOB</th>
		<th>Blood_Group</th>
		<th>Class</th>
		<th>Action</th>
	</tr>

<?php
	$con = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "select * from profile";
	$result = mysqli_query($con, $sql);

	while($data =mysqli_fetch_assoc($result)){ ?>


		<tr>
		    <td><?=$data['name']?></td>
			<td><?=$data['email']?></td>
			<td><?=$data['gender']?></td>
			<td><?=$data['dob']?></td>
			<td><?=$data['bloodGroup']?></td>
			<td><?=$data['class']?></td>
			<td>
				<a href="edit.php?email=<?=$data['email']?>">Edit</a>
				<a href="delete.php">Delete</a>
			</td>
		</tr>


	<?php  }   ?>

<?php  }   ?>



</table>
   </center>
</body>
</html>
<a href=record.php>previous</a>
