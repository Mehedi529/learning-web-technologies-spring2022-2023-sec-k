<?php

  require_once('../model/userModel.php');
  session_start();

  if(isset($_REQUEST['submit'])){


    //declaration
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject']; 
    $message = $_REQUEST['message'];

  // print_r($_REQUEST);exit;

   
    $comm=[$name,$email,$subject,$message];
    $status=communication($comm);
    echo "Successfully send your message";
    //header('location: communication.php?message=successfully_send');
    if($status){
      echo "success";				
    }else{
      echo "missingInfo";
    }
}
  

  }
?>