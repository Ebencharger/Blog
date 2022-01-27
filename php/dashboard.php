<?php
session_start();
$title=$_POST['title'];
$content=$_POST['content'];
$id=$_SESSION['id'];
require("./dbconn.php");

echo $title.$content.$id;

$save="INSERT into content (title,content, uid) values('$title', '$content', '$id')";
$query=mysqli_query($conn, $save);
if ($query) {

}
else{
echo "error"."<a href='../html/dashboard.php'>Go back</a>";
}
?>