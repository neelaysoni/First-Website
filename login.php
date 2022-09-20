<?php
$conn=mysqli_connect("localhost","root","","infinite");
$uname=$_POST["usname"];
$pswd=$_POST["uspswd"];
$sql="select * from details where Username='$uname' and passwrd='$pswd'"or die(mysql_error());;
$r=mysqli_query($conn,$sql);
if (mysqli_num_rows($r)>0){
  while($row=mysqli_fetch_assoc($r)){
  session_start();
  $_SESSION['name']=$row['Firstname'];
  $_SESSION['pswd']=$pswd;
  $_SESSION['uname']=$uname;
  echo header("location:main.php");
}
}
else{
  echo ("<script LANGUAGE='JavaScript'>
  window.location.href='http://localhost/Neelay/WEBSITE/index.html';
  window.alert('Wrong Credentials');
    </script>");
}
mysqli_close($conn);
?>