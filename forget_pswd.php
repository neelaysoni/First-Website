<?php
$conn=mysqli_connect("localhost","root","","infinite");
$uname=$_POST["n1"];
$phn=$_POST["n2"];
$pswd=$_POST["n3"];
$sql="select * from details where Username='$uname' and Phonenumber='$phn'"or die(mysql_error());;
$r=mysqli_query($conn,$sql);
if (mysqli_num_rows($r)>0){
  while($row=mysqli_fetch_assoc($r)){
    $sql2="update details 
    set passwrd='$pswd'
    where Username='$uname' and Phonenumber='$phn'"or die(mysql_error());
    mysqli_query($conn,$sql2);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully Updated Password');
  window.location.href='http://localhost/Neelay/WEBSITE/index.html';
  </script>");
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