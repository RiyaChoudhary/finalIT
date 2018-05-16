<?php
session_start();
include("connect.php");
if(isset($_POST["submit"])){
if(!empty($_POST["username"]) && !empty($_POST["password"])){
$username=$_POST["username"];
$password=$_POST["password"];
$query = mysqli_query($dbh, "SELECT * FROM login WHERE id='$email'");
$row= mysqli_fetch_array($query,MYSQLI_ASSOC);

if($row['password']==$password)
{
$_SESSION['username']=$email;
header("Location:main.html");
}
else {
echo "Invalid username or password";
}}

else
{
echo "invalid";
}
}

?>
