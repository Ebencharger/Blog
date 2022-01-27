<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/index.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <title>LOGIN</title>
</head>
<body>
<main class="row">
<main class="col-sm">
<div class="header bg-primary">
 WELCOME TO EBENCHARGER'S BLOG
</div>
<form action="./php/login.php" method="post">
<div>
    <span>Email:</span>
    <input type="text" name="email" id="" class="form-control-lg form-group">
    <?php
    if (isset($_SESSION['email'])) {
        echo
        "<span class='text-danger'>".$_SESSION['email']."</span>";
    } 
    unset($_SESSION['email']);
    ?>
</div>
<div>
    <span>Password:</span>
    <input type="text" name="password" id="" class="form-control-lg form-group">
    <?php
    if (isset($_SESSION['password'])) {
        echo
        "<span class='text-danger'>".$_SESSION['password']."</span>";
    } 
    unset($_SESSION['password']);
    ?>
</div>
<div>
    <button type="text" name="submit" id="" class="form-control-lg form-group btn btn-primary">Login</button>
</div>

</form>
</main>
</main>    
</body>
</html>