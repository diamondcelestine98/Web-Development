<?php
$conn = mysqli_connect("localhost","root","","rescue");
session_start();
$username = $_POST["user"];
$password = $_POST["pwd"];

$_SESSION['sn'] = $username;

$sql = "select * from register where uname='$username' and password='$password'";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res)==1){
    header("location: dashboard.php");
}
else{
    echo "Either the password or the username is wrong. Please check and try again";
}
?>
