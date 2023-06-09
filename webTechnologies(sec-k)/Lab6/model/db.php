<?php

    function product($pro){   
           $con = mysqli_connect('127.0.0.1' , 'root' , '' , 'product_db');
           $sql = "INSERT INTO `product`(`name`, `buyingPrice`, `sellingPrice`, `display`, `profit`)
                 VALUES 
                   ('[$pro[0]]','[$pro[1]]','[$pro[2]]','[$pro[3]]','[$pro[4]]')";
           $result = mysqli_query($con,$sql);
            return $result;
        }
    
    function updateProduct($pro1){
        $con = mysqli_connect('127.0.0.1' , 'root' , '' , 'product_db');
        $sql = "INSERT INTO `product`(`name`, `buyingPrice`, `sellingPrice`, `display`, `profit`)
              VALUES 
                ('[$pro1[0]]','[$pro1[1]]','[$pro1[2]]','[$pro1[3]]','[$pro1[4]]')";
        $result = mysqli_query($con,$sql);
         return $result;
    }



?>