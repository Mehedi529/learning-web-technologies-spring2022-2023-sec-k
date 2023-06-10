<?php
  
    require_once('../views/communication.php');

  session_start();

  if(isset($_REQUEST['submit'])){


    //declaration
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject']; 
    $message = $_REQUEST['message'];

  // print_r($_REQUEST);exit;

   //validation
   if($name ==""){
    echo "Enter a valid Name";
   }
   else if($email ==""){
    echo "Enter valid Email";
   }
   else if($subject ==""){
    echo "Enter valid Subject";
  }
  else if($message ==""){
    echo "Enter valid Message";
  }
  else{
    $file=fopen('communication.txt' , 'a');
    $data = $name."|".$email."|".$subject."|".$message."\r\n";
    fwrite($file,$data);
    fclose($file);
    echo "Successfully send your message";
    //header('location: communication.php?message=successfully_send');
  }

  }
?>