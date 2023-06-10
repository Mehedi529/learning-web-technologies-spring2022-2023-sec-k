<?php

        require_once('../views/notice.php');
       session_start();

       if(isset($_REQUEST['submit'])){

        //declaration
        $sendNoticeTo = $_REQUEST['sendNoticeTo'];
        $subject = $_REQUEST['subject'];
        $notice = $_REQUEST['notice'];
   //print_r($_REQUEST);exit;

        //validation
        if($sendNoticeTo == ""){
            echo "Enter a valid user";
        }
        else if($subject == ""){
            echo "Enter valid subject";
        }
        else if($notice == ""){
            echo "Enter  notice";
        }
        else{
            $file=fopen('notice.txt' , 'a');
            $data = $sendNoticeTo."|".$subject."|".$notice."\r\n";
            fwrite($file,$data);
            fclose($file);
            echo "Send your notice successfully";
        }
       }
?>