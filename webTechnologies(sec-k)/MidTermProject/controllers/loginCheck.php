<?php 

    session_start();
    
    if(isset($_REQUEST['submit'])){
        //print_r($_GET);
        //echo "Test";
        
        //declaration
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $flag = false;

        //Validation
        if($username == ""){
            echo "Null username";
        }
        else if($password == ""){
            echo "Null password";
        }
        else{

            $file = fopen('user.txt', 'r');
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if($username == trim($user[0]) && $password == trim($user[1])){
                    $flag = true;
                }
            }
            if($flag){
                //$_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;
                setcookie('flag', 'true', time()+86400, '/');
                header('location: ../views/home.php');
            }else{
                //echo "<h1>invalid user!</h1>";
                header('location: ../views/login.php?msg=error');
            }
        }
    }else{
        echo "invalid request!";
    }
?>