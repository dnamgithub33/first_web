<?php
    include 'config.php';
    $task=$_POST['task'];
    $sql = "INSERT INTO db2 (task) VALUES ('$task') ";
    mysqli_query($conn,$sql);
    header('location:signin.php');
?>