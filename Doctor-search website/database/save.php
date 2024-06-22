<?php

if(isset($_post[" submit"])){
     $name = $_POST["name"];
     $email = $_POST["email"];
     $phone = $_POST["phone"];
    //  $date = $_POST["date"];
     if(!empty($name)&& !empty($email)&& !empty($phone)){
        $link=mysqli_connect("localhost","root","","webcoding");
        if($link==false){
            die(mysqli_connect_error());
        }
        $sql ="INSERT INTO test(name,email,phone) VALUES('$name','$email','$phone')";
        if (mysqli_query($link,$sql)){
            echo "record insert sucessfully";
        }
        else{
            echo"something went wrong";
        }
     }
     else{
        echo "please provide all information";
     }
}

?> 