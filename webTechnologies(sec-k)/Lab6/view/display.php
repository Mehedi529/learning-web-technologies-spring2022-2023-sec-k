<?php

  require_once('../model/db.php');


?>

<html lang="en">
<body>
<fieldset>
        <legend>Display</legend>
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
</body>
</html>