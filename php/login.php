<?php
$email=$_POST['email'];
$password=md5($_POST['password']);
$error=false;
require "./dbconn.php";
session_start();
if (isset($_POST['submit'])) {
   if (!$_POST['email']) {
      $_SESSION['email']="fill this field";
      header('location:../index.php');
      $error=true;
   }
   if (!$_POST['password']) {
      $_SESSION['password']="fill this field";
      header('location:../index.php');
      $error=true;
   }
}
if (!$error) {
    $usa=mysqli_query($conn, "SELECT * From users where email='$email'");
 if ($usa) {
   while($myData=mysqli_fetch_array($usa)){
       $_SESSION['id']=$myData['id'];
      header('location:../html/dashboard.php');
   }
 }
 else{
     $_SESSION['email']='Email does not exist';
     $_SESSION['password']='Email does not exist';
     header('location:../index.php');
 }
//   $_SESSION['id']
}


?>