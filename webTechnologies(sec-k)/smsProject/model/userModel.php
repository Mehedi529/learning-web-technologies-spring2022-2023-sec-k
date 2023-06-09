<?php
   require_once "db.php";

   function signup($sign){
    $con = getConnection();
    $sql = "INSERT INTO `signup`(`name`, `username`, `password`, `user`, `email`)
        VALUES 
           ('[$sign[0]]','[$sign[1]]','[$sign[2]]','[$sign[3]]','[$sign[4]]')";
    $result = mysqli_query($con,$sql);
    return $result;
}

    function login($log){
    $con = getConnection();
    $sql = "INSERT INTO `login`(`username`, `password`)
         VALUES 
            ('[$log[0]]','[$log[1]]')";
     $result = mysqli_query($con,$sql);
    return $result;
}

    function profile($pro){
    $con = getConnection();
    $sql = "INSERT INTO `profile`(`name`, `email`, `gender`, `dob`, `bloodGroup`, `class`) 
         VALUES 
            ('[$pro[0]]','[$pro[1]]','[$pro[2]]','[$pro[3]]','[$pro[4]]','[$pro[5]]') ";
    $result=mysqli_query($con,$sql);
    return $result; 
}

    function editProfile($pro){
    $con = getConnection();
    $sql = "update profile set 
              name = '{$pro['name']},
              gender = '{$pro['gender']},
              dob = '{$pro['dob']},
              bloodGroup = '{$pro['bloodGroup']},
              class = '{$pro['class']} where
              email = '{$pro['email']},";
    $result=mysqli_query($con,$sql);
    return $result;
}

    function registration($reg){
    $con = getConnection();
    $sql = "INSERT INTO `registration`(`firstName`, `lastName`, `studentId`, `dob`, `email`, `mobileNumber`, `gender`, `address`, `class`) 
        VALUES
           ('[$reg[0]]','[$reg[1]]','[$reg[2]]','[$reg[3]]','[$reg[4]]','[$reg[5]]','[$reg[6]]','[$reg[7]]','[$reg[8]]') "; 
    $result=mysqli_query($con,$sql);
    return $result; 
}

    function notice($not){
    $con = getConnection();
    $sql = "INSERT INTO `notice`(`sendNoticeTo`, `subject`, `notice`) 
        VALUES 
           ('[$not[0]]','[$not[1]]','[$not[2]]') ";
    $result=mysqli_query($con,$sql);
    return $result; 
}

    function communication($comm){
    $con = getConnection();
    $sql = "INSERT INTO `communication`(`name`, `email`, `subject`, `message`) 
        VALUES 
           ('[$comm[0]]','[$comm[1]]','[$comm[2]]','[$comm[3]]') ";
    $result=mysqli_query($con,$sql);
    return $result; 
}

?>