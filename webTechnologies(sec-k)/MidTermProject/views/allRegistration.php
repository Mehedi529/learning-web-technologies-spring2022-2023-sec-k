<?php
    session_start();
	if(isset($_COOKIE['flag'])){
		$file=fopen('registration.txt' , 'r');
		echo "<table border= 1 >
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
			<td>{$user[6]}</td>
			<td>{$user[7]}</td>
			<td>{$user[8]}</td>
		</tr>";
	}
		echo "</table>";
		fclose($file);

	}
?>

<a href=record.php>previous</a>