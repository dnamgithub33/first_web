<?php
    
    if(isset($_GET['task'])){
        $task = $_GET['task'];
        include("config.php");
        $sql = "DELETE FROM db2 WHERE task='$task'";
        $got = $conn->query($sql);
        if($got)
        header("location:signin.php");
        
    }
?>