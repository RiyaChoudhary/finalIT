<?php
include 'connect.php';
    
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    if($password==$cpassword)
    {  
        $q1="insert into signup (username,email,password,repeatpassword) values ($username','$email','$password','$cpassword')";
        $r1=mysqli_query($connect,$q1);
     
        if($r1)
        {
            session_start(); 
            header("location:main.html");
            $_SESSION["email"]=$email;
            $_SESSION["set"]=TRUE;
        }
    }
    else
    {
        die("Error in regestring");
    }
?>