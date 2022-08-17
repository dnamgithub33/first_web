<?php
    include 'config.php';
    if(isset($_POST["submit"])){
        $username= $_POST['username'];
        $password= $_POST['password'];
        $repassword= $_POST['repassword'];
        $level =0;
        if($password !=$repassword){
            //echo '<script>alert("fail phần rep và p")</script>';
            header('location:signup.php');
        }
        $sql= "SELECT * FROM db1 WHERE username='$username'";
        $got= mysqli_query($conn,$sql);
        $password=md5($password);
        if(mysqli_num_rows($got)>0){
?>
        <script>
          alert("your username is excist");
          window.location.href = "signup.php";
        </script>
<?php
            
        }else{
            $password=md5($password);
            $sql = "INSERT INTO db1 (username,password,level) VALUES ('$username','$password','$level')";
            mysqli_query($conn,$sql);
            echo "<script>alert('Congratulation. Please return to sign in')</script>";
        }
        
    } else{

?>
        <script>
          window.location.href = "signup.php";
        </script>
<?php
    }
?>