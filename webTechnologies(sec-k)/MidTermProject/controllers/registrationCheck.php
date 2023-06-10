<?php
  
      require_once('../views/registration.php');
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

        //Validation 
        if($firstName == ""){
			//header('location: registration.php?message=empty_FirstName');
             echo "Enter a valid FirstName";
		}
        else if($lastName == ""){
			//header('location: sRegistration.php?message=empty_LastName');
            echo "Enter a valid LastName";
		}
        else if($studentId == ""){
			//header('location: sRegistration.php?message=empty_Mobile_Number');
			echo "Enter a valid Student_Id";
		}
		else if($dob==""){
			//header('location: sRegistration.php?message=empty_DOB');
            echo "enter a valid date of birth";
		}
		
		else if($email == ""){
			//header('location: sRegistration.php?message=empty_Email_Id');
            echo "Enter a valid  Email_Id";
		}
		else if($mobileNumber == ""){
			//header('location: sRegistration.php?message=empty_Mobile_Number');
			echo "Enter a valid Mobile_Number";
		}
        else if($gender == ""){
			//header('location: sRegistration.php?message=empty_Gender');
            echo "Enter your Gender";
        }
        else if($address == ""){
			//header('location: sRegistration.php?message=empty_Address');
            echo "Enter your Address";
        }
          
        else if($class == ""){
			//header('location: sRegistration.php?message=empty_Class');
             echo "Enter a Class";
        }
        else{
            // print_r($_REQUEST);exit;
            $file=fopen('registration.txt' , 'a');
            $data = "\r\n" . $firstName."|".$lastName."|".$studentId."|".$dob."|".$email."|".$mobileNumber."|".$gender."|".$address."|".$class;
            fwrite($file,$data);
            fclose($file);
            echo "Successfully Registered";
            //header('location: registration.php?message=successfully_registered');
        }
    }
?>