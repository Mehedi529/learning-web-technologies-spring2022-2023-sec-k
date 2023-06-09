<?php

?>


<html lang="en">
<head>
	<title>EditProduct</title>
</head>
<body>
	<form method="POST" action="../controller/editCheck.php">
		<fieldset>
			<legend>EDIT PRODUCT</legend>
			Name: </br>
			      <input type="text" name="name" value=""></br>
		    Buying Price: </br>
			      <input type="text" name="buyingPrice" value=""></br>
			Selling Price: </br>	
			      <input type="text" name="sellingPrice" value=""></br>  
			
				  <input type="checkbox" name="display" value="Yes">Display
</br>
            <hr>
			      <input type="submit" name="save" value="Save">
			<hr>
		</fieldset>
	</form>
	
</body>
</html>