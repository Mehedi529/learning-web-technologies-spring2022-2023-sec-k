<?php
    session_start();
	if(isset($_COOKIE['flag'])){
		$file=fopen('profile.txt' , 'r');
		echo "<table border= 1 >
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>DOB</th>
		<th>Blood_Group</th>
		<th>Class</th>
	</tr>";
	while(!feof($file))
	{
		$data = fgets($file);
		$user = explode("|" , $data);

		echo "<tr>
		    <td>{$user[0]}</td>
			<td>{$user[1]}</td>
			<td>{$user[2]}</td>
			<td>{$user[3]}</td>
			<td>{$user[4]}</td>
			<td>{$user[5]}</td>
		</tr>";
	}
		echo "</table>";
		fclose($file);

	}
?>

<a href=record.php>previous</a>