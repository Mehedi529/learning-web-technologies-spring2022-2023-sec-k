<?php

?>


<html lang="en">
<head>
	<title>Search</title>
</head>
<body>
	<form method="POST" action="../controller/searchCheck.php">
		<fieldset>
			<legend>SEARCH</legend>
            <textarea name="search" rows="1", cols="30" placeholder=""></textarea><input type="submit" name="Search By Name" value="Search By Name"></br>
			<table border= 1 >

		<tr>
		   <th>Name</th>
		   <th>Profit</th>
		   <th></th>
	    </tr>

 <?php
	$con = mysqli_connect('localhost', 'root', '', 'product_db');
	$sql = "select * from product";
	$result = mysqli_query($con, $sql);

	while($data =mysqli_fetch_assoc($result)){ ?>


		<tr>
		    <td><?=$data['name']?></td>
			<td><?=$data['profit']?></td>
			<td>
                <a href="editProduct.php">Edit</a>
            </td>
            <td>
                <a href="deleteProduct.php">Delete</a>
            </td>
		</tr>


	<?php  }   ?>


</table>
		</fieldset>
	</form>
	
</body>
</html>