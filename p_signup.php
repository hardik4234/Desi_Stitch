<?php
include("p_connection.php");
if(isset($_POST['Submit'])){
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
        $sql = "INSERT INTO users VALUES('$username', '$email', '$password')";
        $result = $conn->query($sql);
        if($result){
            echo "<script>alert('Sign up successful');window.location.href='homepage.html';</script>";
        }
     }
?> 