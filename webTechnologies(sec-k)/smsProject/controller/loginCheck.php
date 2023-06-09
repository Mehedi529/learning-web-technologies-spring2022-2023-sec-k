<?php 
	require_once('../model/userModel.php');
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
	
		if($username != ""){
			if($password != ""){

				$status = login($username, $password);

				if($status){
					$_SESSION['username'] = $username;
					setcookie('flag', 'true', time()+86400, '/');
					header('location: ../view/home.php');
				}else{
                    $log=[$username,$password];
                    $status=login($log);
					header('location: ../view/login.php');
				}

			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid username...";
		}
	}

?>


