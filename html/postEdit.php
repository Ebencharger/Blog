<?php
session_start();
require "../php/dbconn.php";
$id=$_SESSION['postId'];
echo $id;
$post=mysqli_query($conn, "SELECT * From content where content.id='$id'");
if (isset($_SESSION['id']) && isset($_SESSION['id'])!="") {

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap/bootstrap.css">
        <link rel="stylesheet" href="../scss/dashboard.css">
        <title>DASHBOARD</title>
    </head>
    <body>
    <main class="row">
    <main class="col-sm">
    <div class="head bg-primary">
            <a href="../html/delete.php" class="back">Delete Post</a>
            <a href="../html/edit.php" class="back">Edit Post</a>
            <a href="../index.php" class="back">Logout</a>
    </div>
    <form action="./postEdit.php" method="post">
    <div>
    <span>Title</span>
    <?php
    if ($post) {
        if (mysqli_num_rows($post)>=1){
            while ($all=mysqli_fetch_assoc($post)){
                echo "<input type='text' name='title' class='form-group form-control-lg' value=".$all['title'].">".
                "</div>".
                  "<div>".
    "<span>"."content"."</span>"."<br>".
    "<textarea name='content' id='' cols='66' rows='10'>".$all['content']."</textarea>"
    ."</div>";
           if (isset($_POST['submit'])) {
            $title=$_POST['title'];
            $content=$_POST['content'];
             $update="UPDATE content SET title='$title', content='$content' where content.id='$id'";
             $save=mysqli_query($conn, $update);
             if ($save) {
               header('location:./allBlog.php');
             }
             else{
                 echo "Something went wrong";
                 header('location:./postEdit.php');
             }
           }
            }
        }
    }
  
    ?>
    <div>
    <button name="submit" class="btn btn-primary">POST</button>
    </div>
    </form>
    </main>
    </main>    
    </body>
    ?>
    </html>
    <?php
}
else{
    header('location:../index.php');
}



?>