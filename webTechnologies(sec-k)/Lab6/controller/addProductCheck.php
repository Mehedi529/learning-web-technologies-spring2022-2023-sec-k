<?php

   session_start();

   require_once('../model/db.php');

   if(isset($_REQUEST['save'])){

	    $name =$_REQUEST['name'];
		$buyingPrice =$_REQUEST['buyingPrice'];
		$sellingPrice = $_REQUEST['sellingPrice'];

		$profit = (int)$sellingPrice - (int)$buyingPrice;

	if(isset($_REQUEST['display'])){
		$display ="Yes";
	}
	else{
		$display ="No";
	}
	if($name="" || $buyingPrice="" || $sellingPrice==""){
		echo "Null value";
	}
	else{
		$pro=[$name,$buyingPrice,$sellingPrice,$display,$profit];
		$status=product($pro);
		echo "successfully add the product";
	}
   }

?>