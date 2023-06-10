<?php 

    session_start();
    
    if(isset($_REQUEST['submit'])){
    
		//declaration 
		$name = $_REQUEST['name'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $user = $_REQUEST['user'];
        $email = $_REQUEST['email'];

		//Validation
		if($name == ""){
			echo "Enter your name";
				}
		else if($username==""){
			echo "Enter a valid User Name";
			//header('location: signup.php?message=empty_username');
		}
		
		else if($password ==""){
			echo "Enter a password";
			//header('location: signup.php?message=empty_password');
		}
		else if (strpos($password,"@") ||strpos($password,"#") ||strpos($password,"$") ||strpos($password,"%") ) 
		{

			// echo "\n Invalid password";
			echo "Password must not be less than eight(8) characters \n Password must contain at least one of the special characters (@, #, $, %)";
		}
		else if($user == ""){
			echo "Enter Your User";
			//header('location: signup.php?message=empty_user');
		}
        else if($email==""){
			echo "enter a valid email";
			//header('location: signup.php?message=empty_email');
		}
		elseif ((strpos($_REQUEST['email'], '@') != true) || (strpos($_REQUEST['email'], '.') != true))
	{
		
		echo "Email dose not contain '@' and/or '.' . ";
	}


        else{
            $file = fopen('user.txt', 'a');
            $data =$name."|". $username."|".$password."|".$user."|".$email."\r\n";
            fwrite($file, $data);
            fclose($file);
			
			//exit;
            header('location: ../views/login.php');
        }
    }
?>