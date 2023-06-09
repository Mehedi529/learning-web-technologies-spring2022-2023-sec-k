<?php
    
    require_once('../model/userModel.php');

    $name = $_REQUEST['Name'];
    $gender = $_REQUEST['Gender'];
    $dob = $_REQUEST['DOB'];
    $blood_group = $_REQUEST['Blood_Group'];
    $class = $_REQUEST['Class'];
    $email = $_REQUEST['Email'];
    
    $pro = ['email'=>$email, 'name'=>$name, 'gender'=>$gender, 'dob'=>$dob, 'blood_group'=>$blood_Group, 'class'=>$class];

    $status = editProfile($pro);

    if($status){
        header('location: ../allprofile.php');
    }
    else{
        header('location: ../edit.php?email='.$email);
    }

?>