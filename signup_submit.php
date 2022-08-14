<?php
    include 'connect.php';
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['repassword'] !=''&& $_POST['password'] !=''){
        $username= $_POST['username'];
        $password= $_POST['password'];
        $repassword= $_POST['repassword'];
        if($password !=$repassword){
            
            header('location:signup.php');
        }
        $sql= "SELECT * FROM user WHERE username='$username";
        $got= mysqli_query($conn,$sql);
        $password=md5($password);
        if(mysqli_num_rows($got)>0){
            header('location:signup.php');
        }else{
            $sql = "INSERT INTO user (username,password,level) VALUES ('$username','$password','$level')";
            mysqli_query($conn,$sql);
            echo '<script>alert("Congratulation")</script>';
        }
        
    } else{
        header('location:signup.php');
    }
?>