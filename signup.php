<?php
$conn=mysqli_connect("localhost","root","","infinite");
$uname=$_POST["usrname"];
$fname=$_POST["n1"];
$mname=$_POST["n2"];
$lname=$_POST["n3"];
$num=$_POST["n4"];
$gen=$_POST["gender"];
$pswd=$_POST["pswd"];
$sql="insert into details(Username,Firstname,Middlename,Lastname,Phonenumber,Gender,passwrd) values ('$uname','$fname','$mname','$lname','$num','$gen','$pswd')";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:index.html ");
?>