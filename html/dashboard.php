<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['id'])!="") {

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../scss/dashboard.css">
        <link rel="stylesheet" href="../bootstrap/bootstrap.css">
        <title>SIGN UP</title>
    </head>
    <body>
    <main class="row">
    <main class="col-sm">
    <form action="../php/dashboard.php" method="post">
    <div>
    <span>Title</span>
    <input type="text" name="title" class="form-group form-control-lg">
    </div>
    <div>
    <span>content</span><br>
    <textarea name="content" id="" cols="66" rows="10"></textarea>
    </div>
    <div>
    <button name="submit" class="btn btn-primary">POST</button>
    </div>
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