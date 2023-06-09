<?php

    require_once('../model/db.php');
    session_start();
	if(isset($_COOKIE['flag'])){

?>


<html lang="en">
<body>
<fieldset>
    <legend>DELETE PRODUCT</legend>

<table>
		<tr>
		<th>Name</th>
		<th>BuyingPrice</th>
		<th>SellingPrice</th>
	</tr>

<?php
	$con = mysqli_connect('localhost', 'root', '', 'product_db');
	$sql = "select * from product";
	$result = mysqli_query($con, $sql);

	while($data =mysqli_fetch_assoc($result)){ ?>


		<tr>
		    <td><?=$data['name']?></td>
			<td><?=$data['buyingPrice']?></td>
			<td><?=$data['sellingPrice']?></td>
		</tr>


	<?php  }   ?>

<?php  }   ?>



</table>
<hr>
<input type="submit" name="delete" value="delete">
   </center>
   </fieldset>
</body>
</html>