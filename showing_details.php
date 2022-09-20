<?php 
session_start();
$conn=mysqli_connect("localhost","root","","infinite");
$pswd=$_SESSION['pswd'];
$usname=$_SESSION['uname'];
$sql="select * from details where Username='$usname' and passwrd='$pswd'"or die(mysql_error());;
$r=mysqli_query($conn,$sql);
if (mysqli_num_rows($r)>0){
  while($row=mysqli_fetch_assoc($r)){
    $uns=$usname;
    $fns=$row['Firstname'];
    $mns=$row['Middlename'];
    $lns=$row['Lastname'];
    $phns=$row['Phonenumber'];
    $gen=$row['Gender'];
  }}
?>
<!DOCTYPE html>
<html>
  <head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <style> 
  body{
    background-image:url("space.png");
    background-size:cover;
    /* opacity: 0.2;   */
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333d4;
}

li {
  float: left;
}

li:last-child {
  border-right: none;
}

li .linko {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li .linko:hover:not(.active) {
  background:rgb(75, 75, 75);
}
.container{
  display: grid;
  grid-template-areas:
  'lside lside lside lside'
  'section section section section'
  'footer footer footer footer';
}
.spacing{
  margin:2px;
  padding:10px;
}
#Lside{
  margin-top:4px;}
    #Lside{
      grid-area: lside;

      background-color: rgb(219 184 251 / 69%);
    }
    #Section{
      grid-area: section;

      text-align: center;
      background-color: rgb(251 250 184 / 67%);
    }
    #footer{
      grid-area: footer;

      background-color: rgb(250 159 192 / 71%);
    }
    .dropbtn {
  background: #33333329;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropsown-content{
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  background: #333333d4;
  color:white;
  width:100px;
}
.dpmenu:hover {
  background:rgb(75, 75, 75);
}
.active{
  border-bottom:4px solid white;
}
.button_like{
            border: 1px solid black;
            color: rgb(255, 0, 43);
            width: 100px;
            height: 100px;
            font-size: 4em;
            border-radius:10px;
            outline: none;
            background: none;
        }
.button_like:hover{
  cursor:pointer;
}
#demo{
            width: 100px;
            height: 20px;
            text-align: center;
            border: 1px solid black;
            border-radius:10px;

        }
        #livesearch,th,.td, {
  border : 1px solid black;
  border-collapse: collapse;
}
  </style>
  </head>
<body>
<ul>
  <li><a  class="linko"href="http://localhost/Neelay/WEBSITE/main.php">Home</a></li>
  <li ><a  class="linko"href="http://localhost/Neelay/WEBSITE/ajax.php">AJAX</a></li>
  <li><a  class="linko"href="http://localhost/Neelay/WEBSITE/aboutus.php">About Us</a></li>
  <li style="float:right;">
  <div class="dropdown">
  <button class="linko dropbtn"><?php echo $_SESSION['name'];?></button>
    <div id="myDropdown" class="dropdown-content hidden">
      <a href="http://localhost/Neelay/WEBSITE/showing_details.php"class=" dpmenu hidden active"style="position:absolute;right:8px;">Details</a>
      <a href="#"class=" dpmenu hidden" onclick="logout();"style="position:absolute;right:8px;top:100.5px;">Log out</a>
    </div>
  </div>
  </li> 
</ul>
<div class="container">
    <div id="Lside" class="spacing">
    <h1 style="display:inline-block;float:;">User NAME</h1>
    <h1 style="display:inline-block;float:right;margin-right:33px;"><?php echo $uns;?></h3><br>
    <h1 style="display:inline-block;float:;">First Name</h1>
    <h1 style="display:inline-block;float:right;margin-right:33px;"><?php echo $fns;?></h3><br>
    <h1 style="display:inline-block;float:;">Middle Name</h1>
    <h1 style="display:inline-block;float:right;margin-right:33px;"><?php echo $mns;?></h3><br>    
    <h1 style="display:inline-block;float:;">Last Name</h1>
    <h1 style="display:inline-block;float:right;margin-right:33px;"><?php echo $lns;?></h3><br> 
    <h1 style="display:inline-block;float:;">Phone Number</h1>
    <h1 style="display:inline-block;float:right;margin-right:33px;"><?php echo $phns;?></h3><br> 
    <h1 style="display:inline-block;float:;">Gender</h1>
    <h1 style="display:inline-block;float:right;margin-right:33px;"><?php echo $gen ;?></h3><br>
  </div>
    <div id="Section" class="spacing" style="font-weight:bold;">
    <h1 style="display:inline;color:rgb(216, 156, 92);">“</h1>FINITE MINDS CANNOT COMPREHEND INFINITY(&infin;).<h1 style="display:inline;color:rgb(216, 156, 92);;">”</h1>
    </div>
    <div id="footer" class="spacing">Copyright(&#169;) 2003-2022 Neelay.com</div>
  </img>
</body>
</html>
<script LANGUAGE='JavaScript'>
  $(document).ready(function(){
  $(".hidden").hide();
  $(".dropbtn").click(function(){
    $(".hidden").toggle(15);
  });
});
function logout(){
    window.alert('Loggin Out From Your Account');
    window.location.href='http://localhost/Neelay/WEBSITE/index.html';
  }
  </script>