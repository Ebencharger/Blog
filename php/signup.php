<?php
session_start();
$fullName=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$psd=md5($_POST['password']);
$error=false;
require './dbconn.php';
if (isset($_POST['submit'])) {
  if (!$_POST['fullname']) {
     $_SESSION['fullname']="fill this field";
     header('location:../html/signup.php');
     $error=true;
  }
  if (!$_POST['email']) {
     $_SESSION['email']="fill this field";
     header('location:../html/signup.php');
     $error=true;
  }
  if (!$_POST['phone']) {
     $_SESSION['phone']="fill this field";
     header('location:../html/signup.php');
     $error=true;
  }
  if (!$_POST['password']) {
     $_SESSION['password']="fill this field";
     header('location:../html/signup.php');
     $error=true;
  } 
}
if (!$error) {
   //all fields are filled
   $exist=mysqli_query($conn, "SELECT * From users where email='$email' and phone='phone'");
//    if ($exist) {
//     echo "ACCOUNT EXISTS ALREADY!"."<a href='../html/signup.php'>Go back</a>";
//     return;
//    }
   $query="INSERT into users (fullname,email, phone, psd) values('$fullName', '$email', '$phone', '$psd')";
   $save=mysqli_query($conn, $query);
   if ($save) {
    $_SESSION['success']="YOUR FORM SUBMITTED SECCESSFULLY";
    header('location:../html/signup.php');
   }
   else{
       echo "SOMETHING WENT WRONG!";
   }
}
?>