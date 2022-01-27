<?php
 require '../php/dbconn.php';
 $query=mysqli_query($conn, "SELECT * From content");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../scss/allBlog.css">
    <title>Document</title>
</head>
<body>
<main class="row">
<main class="col-sm">
<div class="header bg-primary">
 WELCOME TO EBENCHARGER'S BLOG
</div>
<form>
<?php
 while($all=mysqli_fetch_array($query)){
     ?>
    <div class="holder">
      <h5 class="text-center">
        <?php 
      echo $all['title'];
      ?></h5>
     <p class="text-center">
        <?php
        echo
        "<a href='./read.php?post_id=".$all['id']."'>"."CLICK TO READ POST</a>"
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

?>