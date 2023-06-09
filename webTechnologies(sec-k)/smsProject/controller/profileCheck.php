<?php
    
    require_once('../model/userModel.php');
    session_start();

    if(isset($_REQUEST['submit'])){


        //declaration
        $name = $_REQUEST['Name'];
        $email = $_REQUEST['Email'];
        $gender = $_REQUEST['Gender'];
        $dob = $_REQUEST['DOB'];
        $blood_group = $_REQUEST['Blood_Group'];
        $class = $_REQUEST['Class'];
        //$photo = $_FILES['Photo'];

 // print_r($_REQUEST);exit;

             $pro=[$name,$email,$gender,$dob,$blood_group,$class];
            $status=profile($pro);
            echo "Profile Complete Successfully";
            //header('location: profile.php?message=profile_complete_successfully'); 

            if($status){
                echo "success";				
            }else{
            echo "missingInfo";
            }
        
    }
?>