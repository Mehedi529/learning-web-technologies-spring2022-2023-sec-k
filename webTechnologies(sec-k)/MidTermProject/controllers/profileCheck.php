<?php

require_once('../views/profile.php');
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

        //Validation
        if($name == ""){
			//header('location: studentProfile.php?message=empty_name');
            echo "Enter a Name";
		}
		else if($email==""){
			//header('location: studentProfile.php?message=empty_email');
             echo "enter a valid Email";
		}
		
		else if($gender == ""){
			//header('location: studentProfile.php?message=empty_gender');
             echo "Enter Your Gender";
		}
		else if($dob == ""){
			//header('location: studentProfile.php?message=empty_dob');
			 echo "Enter a Date of Birth";
		}
        else if($blood_group == ""){
			//header('location: studentProfile.php?message=empty_bloodGroup');
             echo "Enter a Blood Group";
        }
        else if($class == ""){
			//header('location: studentProfile.php?message=empty_class');
             echo "Enter a Class";
        }
        else{
            $file=fopen('profile.txt' , 'a');
            $data = "\r\n" . $name."|".$email."|".$gender."|".$dob."|".$blood_group."|".$class;
            fwrite($file,$data);
            fclose($file);
            echo "Profile Complete Successfully";
            //header('location: profile.php?message=profile_complete_successfully'); 
        }
    }
?>