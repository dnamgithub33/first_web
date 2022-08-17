<?php
    include 'config.php';
    if(isset($_POST["submit"])){
        $username= $_POST['username'];
        $password= $_POST['password'];
        $password=md5($password);
        $sql= "SELECT * FROM db1 WHERE username='$username' AND password='$password'";
        $got= mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($got)>0){
           // echo "<script>alert('sai kiểm tra có trong db k')</script>";
?>
        <script>
           alert("sign in sucessfull");
           window.location.href = "signin.php";
         </script>
<?php 
        }else{
            //echo "<script>alert('sai kiểm tra có trong db k2')</script>";
?>
        <script>
          alert("Your username or password is wrong");
          window.location.href = "index.php";
        </script>
<?php
        }
        
    }else{
        header('location:index.php');
    }
?>