<?php

$conn = mysqli_connect("localhost","root","", "rescue") or die ("UNABLE TO CONNECT");

$name = $_POST['name'];
$phno = $_POST['Mnum'];

$eid = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];
$date = $_POST['date'];
$addr = $_POST['addr'];
$comp = $_POST['comp'];


$sql = "insert into register(name,phone,email,uname,password,date,address,company)values('$name','$phno','$eid','$username','$password','$date','$addr','$comp')";

mysqli_query($conn,$sql);

//echo "YOU ARE REGISTERED SUCCESSFULLY !"
//header("location:homepage.html");
header("location: index.html");
?>
