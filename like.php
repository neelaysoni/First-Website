<?php
$conn=mysqli_connect("localhost","root","","likes");
$sql="update likes set click=click+1;";
mysqli_query($conn,$sql);

$sql = "SELECT click FROM likes";
$result = mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($result);
$likes=$r["click"];
echo $r["click"];
?>