<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to Healing Hands Fitness center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911|Offside" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  
  <style>
      
      .navbar
{
    margin-bottom: 0px;
}




* {
    box-sizing: border-box;
}

body {
    margin: 0;
    ;
}

/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */
.container {
    position: relative;
    display: none;
}

/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
</style>
</head>
<body>
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><b>HEALING HANDS PHYSIO AND SPORTS FITNESS CENTRE</b></a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="index.php"><b>HOME</b></a></li>
        <li><a href="aboutus.php"><b>ABOUT US</b></a></li>
      <li class="active"><a href="gallery.php"><b>GALLERY</b></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span>REGISTER</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>

    
<div class="container-fluid"style="background-color:#00FFFF">
  <h1 class="c1"><b><u><center>HEALING HANDS PHYSIO AND SPORTS FITNESS CENTRE.</center></u></b></h1>
  <h2 style"font-family:Comic Sans MS;"><b><center>LAKE ROAD(NEAR CHATTA MASJID)RANCHI-834001</center></b></h2>
  <h1><b><center><u>DR.AMIT PAL(P.T)</u></center></b><h1>
  <h3><b><center>M.P.T(SPORTS),B.P.T,M.I.A.P,F.I.M.T</center></b><h1>
  </div>
</nav>
    
<div style="text-align:center">
  <h2>Image Gallery</h2>
  <p>Click on the images below:</p>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
      <img src="img/1.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
      <img src="img/2.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
      <img src="img/3.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
      <img src="img/4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/5.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/6.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/7.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/8.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/9.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/10.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/11.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/12.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/c.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
        <img src="img/d.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>



<?php include 'footer.php';
?>
</html>
