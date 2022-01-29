<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/signup.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <title>SIGNUP</title>
</head>
<body>
<main class="row">
<main class="col-sm">
<div class="header bg-primary">
 WELCOME TO EBENCHARGER'S BLOG
</div>
<form action="../php/signup.php" method="post">
    <?php
     if (isset($_SESSION['success'])) {
        echo "<div class='message'>"."<div>"."<h5>".$_SESSION['success']."</h5>"."<a href='../index.php'>Click here to Login</a>"."</div>"."</div>";
      } 
      unset($_SESSION['success']);
    ?>
    
<div>
    <span>Full name:</span>
    <input type="text" name="fullname" id="" class="form-control-lg form-group">
    <?php
    if (isset($_SESSION['fullname'])) {
      echo "<span class='text-danger'>"."Fill this field"."</span>";
    } 
    unset($_SESSION['fullname']);
    ?>
    
</div>
<div>
    <span>Email:</span>
    <input type="text" name="email" id="" class="form-control-lg form-group">
    <?php
    if (isset($_SESSION['email'])) {
      echo "<span class='text-danger'>"."Fill this field"."</span>";
    } 
    unset($_SESSION['email']);
    ?>
</div>
<div>
    <span>Phone number:</span>
    <input type="text" name="phone" id="" class="form-control-lg form-group">
    <?php
    if (isset($_SESSION['phone'])) {
      echo "<span class='text-danger'>"."Fill this field"."</span>";
    } 
    unset($_SESSION['phone']);
    ?>
</div>
<div>
    <span>Password:</span>
    <input type="text" name="password" id="" class="form-control-lg form-group">
    <?php
    if (isset($_SESSION['password'])) {
      echo "<span class='text-danger'>"."Fill this field"."</span>";
    } 
    unset($_SESSION['password']);
    ?>
</div>
<div>
    <button type="text" name="submit" id="" class="form-control-lg form-group btn btn-primary">Signup</button>
</div>

</form>
</main>
</main>    
</body>
</html>