<?php
session_start();
require "../php/dbconn.php";
$query=mysqli_query($conn, "SELECT * From content");
if (isset($_SESSION['id']) && isset($_SESSION['id'])!="") {

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap/bootstrap.css">
        <link rel="stylesheet" href="../scss/delete.css">
        <title>DELETE</title>
    </head>
    <body>
    <main class="row">
    <main class="col-sm">
    <div class="head bg-primary">
            <a href="../html/dashboard.php" class="back">Post</a>
            <a href="../html/edit.php" class="back">Edit Post</a>
            <a href="../index.php" class="back">Logout</a>
    </div>
    <form action="./delete.php" method="post">
    <?php
 while($all=mysqli_fetch_array($query)){
     $_SESSION['postId']=$all['id'];
     ?>
    <div class="holder">
      <h5 class="text-center">
        <?php 
      echo $all['title'];
      ?></h5>
     <p class="text-center">
        <?php
        echo
        "<a href='../php/delete.php'>"."DELETE POST</a>"
        ?>
        </p>
    </div>
   <?php
 }
 ?>
    </form>
    </main>
    </main>    
    </body>
    </html>
    <?php
}
else{
    header('location:../index.php');
}



?>