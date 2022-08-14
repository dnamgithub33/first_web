<?php
    include 'connect.php';
    if(isset($_POST["submit"])){
        $username= $_POST['username'];
        $password= $_POST['password'];
        $repassword= $_POST['repassword'];
        $level =0;
        if($password !=$repassword){
            echo '<script>alert("fail phần rep và p")</script>';
            //header('location:signup.php');
        }
        $sql= "SELECT * FROM user WHERE username='$username";
        $got= mysqli_query($conn,$sql);
        $password=md5($password);
        if(mysqli_num_rows($got)>0){
            $sql = "INSERT INTO user (username,password,level) VALUES ('$username','$password','$level')";
            mysqli_query($conn,$sql);
            echo '<script>alert("Congratulation")</script>';
        }else{
            echo '<script>alert("fail")</script>';
            //header('location:signup.php');
        }
        
    } else{
        echo '<script>alert("fail điều kiện đầu")</script>';
       // header('location:signup.php');
    }
?>
