<?php
    include 'connect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select password from register where email='$email'";
    $run=mysqli_query($connection,$query)or die("Error");
    $fetch=mysqli_fetch_array($run);

    $query1="select role from register where email='$email'";
    $run1=mysqli_query($connect,$query1)or die('Error');
    $fetch1=mysqli_fetch_array($run1);
    
    if($fetch[0]==$password)
    {
        if($fetch1[0]=='user'){
            
        session_start();
            header("location:main.html");
        $_SESSION["email"]=$email;
        $_SESSION["set"]=TRUE;
         }
        if($fetch1[0]=='admin'){
            session_start();
            header("location:something.html");
        $_SESSION["email"]=$email;
        $_SESSION["set"]=TRUE;
    }
    }
    elseif($fetch[0]==NULL)
    {
        echo("<script> alert('User name not registred'); </script");
    }
    else
    {
        echo ("<script>alert('Incorrect password or username');</script>");
    }
?>