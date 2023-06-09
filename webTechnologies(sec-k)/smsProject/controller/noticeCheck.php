<?php
       
       require_once('../model/userModel.php');
       session_start();

       if(isset($_REQUEST['submit'])){

        //declaration
        $sendNoticeTo = $_REQUEST['sendNoticeTo'];
        $subject = $_REQUEST['subject'];
        $notice = $_REQUEST['notice'];
   //print_r($_REQUEST);exit;

            $not=[$sendNoticeTo,$subject,$notice];
            $status=notice($not);
            echo "Send your notice successfully";
            if($status){
                echo "success";				
            }else{
                echo "missingInfo";
            }
    
        
       }
?>