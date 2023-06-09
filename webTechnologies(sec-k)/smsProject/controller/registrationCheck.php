<?php

    require_once('../model/userModel.php');
    session_start();

    if(isset($_REQUEST['submit'])){



        //declaration
        $firstName = $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];
        $studentId = $_REQUEST['studentId'];
        $dob = $_REQUEST['dob'];
        $email = $_REQUEST['email'];
        $mobileNumber = $_REQUEST['mobileNumber'];
        $gender = $_REQUEST ['gender'];
        $address = $_REQUEST ['address'];
        $class = $_REQUEST ['class'];


// print_r($_REQUEST);exit;

        
            // print_r($_REQUEST);exit;
            $reg=[$firstName,$lastName,$studentId,$dob,$email,$mobileNumber,$gender,$address,$class];
            $status=registration($reg);
            echo "Successfully Registered";
            //header('location: registration.php?message=successfully_registered');
            
        if($status){
                echo "success";				
        }else{
            echo "missingInfo";
        }
    }
?>