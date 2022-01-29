<?php
require '../php/dbconn.php';
$id = $_GET['post_id'];
$query = mysqli_query($conn, "SELECT * From content JOIN users ON users.id=content.uid where content.id='$id'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../scss/read.css">
    <title>READ</title>
</head>

<body>
    <main class="row">
        <main class="col-sm">
            <div class="header bg-primary">
                <p> WELCOME TO EBENCHARGER'S BLOG</p>
                <a href="../html/allBlog.php" class="back">Go back</a>
            </div>
            <form>
                <?php
                if (mysqli_num_rows($query) >= 1) {
                    while ($all = mysqli_fetch_assoc($query)) {
                        $view=$all['view']+1;
                        $update="UPDATE content SET view='$view' where content.id='$id'";
                        mysqli_query($conn, $update);
                ?>
                        <div class="holder">
                            <h5 class="text-center">
                                <?php
                                echo $all['title'];
                                ?></h5>
                            <p> <?php
                                echo $all['content'];
                                ?></p>
                            <h5> <?php
                                echo "Posted by ". $all['fullname'];
                                ?></h5>
                            <h5> <?php
                                echo "On ". $all['date']." read by ".$all['view']." people";
                                ?></h5>
                        </div>
                <?php
                    }
                }
                ?>
            </form>
        </main>
    </main>



</body>

</html>
<?php

?>