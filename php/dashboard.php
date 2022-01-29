<?php
session_start();
$title=$_POST['title'];
$content=$_POST['content'];
$id=$_SESSION['id'];
$send=false;
require("./dbconn.php");
if ($_POST['title']) {
   $send=true;
}
if ($_POST['content']) {
    $send=true;
}
if ($send) {
    $save="INSERT into content (title,content, uid) values('$title', '$content', '$id')";
    $query=mysqli_query($conn, $save);
    if ($query) {
        header('location:../html/allBlog.php');
    }
    else{
    echo "Something went wrong. Please try again! "."<a href='../html/dashboard.php'>Go back</a>";
    }
}
else{
    echo "You happened not to fill those fields! "."<a href='../html/dashboard.php'>Go back</a>"; 
}
?>