<?php
include("p_connection.php");
if(isset($_POST['submit'])){
$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "select * from users where Username = '$username' and Password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1){
    echo "<script>alert('login successful');let date = new Date();date.setTime(date.getTime() + (60 * 1000));document.cookie = 'STATUS=VERIFIED'; window.location.href='homepage.html';</script>";
}else{
    echo "<script>alert('Login failed. Invalid Username or password');window.location.href = 'index_l.html';</script>";
}
}
?>