<?php
$server="localhost";
$user="root";
$password="";
$db="ebenblog";

$conn=mysqli_connect($server, $user, $password, $db);
if ($conn) {
//    echo "connection connected successfully";
}
else{
    // echo "error in connection";
}

?>