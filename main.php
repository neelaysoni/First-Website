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
  'lside lside lside rside'
  'section section section section'
  'footer footer footer footer';
}
.spacing{
  margin:2px;
  padding:10px;
}
#Rside{
  grid-area: rside;
  text-align:center;
  padding:0px;
}
#Lside ,#Rside{
  margin-top:4px;
}
#img{
  background-size: cover;
  width:248px;
  height:493px;
}
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
  border-bottom:2px solid white;
}
  </style>
  </head>
<body>
<?php session_start();?>
<ul>
  <li class="active"><a  class="linko"href="http://localhost/Neelay/WEBSITE/main.php">Home</a></li>
  <li><a  class="linko"href="http://localhost/Neelay/WEBSITE/ajax.php">AJAX</a></li>
  <li><a  class="linko"href="http://localhost/Neelay/WEBSITE/aboutus.php">About Us</a></li>
  <li style="float:right">
  <div class="dropdown">
  <button class="linko dropbtn"><?php echo $_SESSION['name'];?></button>
    <div id="myDropdown" class="dropdown-content hidden">
      <a href="http://localhost/Neelay/WEBSITE/showing_details.php"class=" dpmenu hidden" style="position:absolute;right:8px;">Details</a>
      <a href="#"class=" dpmenu hidden" onclick="logout();"style="position:absolute;right:8px;top:98px;">Log out</a>
    </div>
  </div>
  </li> 
</ul>
<div class="container">
    <div id="Lside" class="spacing">
    <h1>INFINITE</h1>
    Infinity is that which is boundless, endless, or larger than any natural number. It is often denoted by the infinity symbol.
Since the time of the ancient Greeks, the philosophical nature of infinity was the subject of many discussions among philosophers. In the 17th century, with the introduction of the infinity symbol and the infinitesimal calculus, mathematicians began to work with infinite series and what some mathematicians (including l'Hôpital and Bernoulli) regarded as infinitely small quantities, but infinity continued to be associated with endless processes. As mathematicians struggled with the foundation of calculus, it remained unclear whether infinity could be considered as a number or magnitude and, if so, how this could be done. At the end of the 19th century, Georg Cantor enlarged the mathematical study of infinity by studying infinite sets and infinite numbers, showing that they can be of various sizes. For example, if a line is viewed as the set of all of its points, their infinite number (i.e., the cardinality of the line) is larger than the number of integers. In this usage, infinity is a mathematical concept, and infinite mathematical objects can be studied, manipulated, and used just like any other mathematical object.
The mathematical concept of infinity refines and extends the old philosophical concept, in particular by introducing infinitely many different sizes of infinite sets. Among the axioms of Zermelo Fraenkel set theory, on which most of modern mathematics can be developed, is the axiom of infinity, which guarantees the existence of infinite sets. The mathematical concept of infinity and the manipulation of infinite sets are used everywhere in mathematics, even in areas such as combinatorics that may seem to have nothing to do with them. For example, Wiles's proof of Fermat's Last Theorem implicitly relies on the existence of very large infinite sets for solving a long-standing problem that is stated in terms of elementary arithmetic.
In physics and cosmology, whether the Universe is infinite is an open question.<br>
<h2>SYMBOL</h2>
The infinity symbol (sometimes called the lemniscate) is a mathematical symbol representing the concept of infinity. The symbol is encoded in Unicode at ∞ INFINITY (&infin;) and in LaTeX. It was introduced in 1655 by John Wallis, and since its introduction, it has also been used outside mathematics in modern mysticism and literary symbology.
<div style="display:block;text-align:center;margin-top:10px;font-weight:bold;">
<h1 style="display:inline;color:rgb(255 1 1);;">“</h1>YOUR POTENTIAL TO SUCCEED IS INFINITE<h1 style="display:inline;color:rgb(255 1 1);;">”</h1>
</div>
</div>
    <div id="Rside" class="spacing">
      <img id="img" src="2736700.webp">
      </div>
    <div id="Section" class="spacing" style="font-weight:bold;">
      <h1 style="display:inline;color:rgb(216, 156, 92);">“</h1>SOME INFINITIES ARE BIGGER THAN OTHER INFINITES.<h1 style="display:inline;color:rgb(216, 156, 92);;">”</h1>
    </div>
    <div id="footer" class="spacing">Copyright(&#169;) 2003-2022 Neelay.com</div>
  </img>
</body>
</html>
<script LANGUAGE='JavaScript'>
  function logout(){
    window.alert('Loggin Out From Your Account');
    window.location.href='http://localhost/Neelay/WEBSITE/index.html';
  }
  $(document).ready(function(){
  $(".hidden").hide();
  $(".dropbtn").click(function(){
    $(".hidden").toggle(15);
  });
});
  </script>