<?php
session_start();
require "../php/dbconn.php";
$id=$_SESSION['postId'];
echo $id;
$query="DELETE FROM content where content.id='$id'";
$delete=mysqli_query($conn, $query);
if ($delete) {
   header('location:../html/allBlog.php');
}
else{
    echo "it can not delete now";
}

?>