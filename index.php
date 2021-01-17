<!DOCTYPE html>
<html>
<head>
<title>Welcome!</title>
<link rel="icon" href="img/logo.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("img/welcome.jpg");
  
  /* Add the blur effect */
  filter: blur(1px);
  -webkit-filter: blur(1px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>
<nav class="grey darken-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="#">Welcome</a></li>
        <li><a href="public/reports.php">Reports</a></li>
        <li><a href="public/graphs.php">Graphs</a></li>
    </ul>
    <ul id="nav-mobile" class="right hide-on-med-and-down">

    </ul>
    </div>
</nav>
<div class="bg-image"></div>

<div class="bg-text">
  <h1 style="font-size:50px">Harvest Report Platform</h1>
  <p>Report Your Harvest to the Keels & DOA now</p>
  <a href="farmers/login/login-farmers.php" class="waves-effect  green waves-light btn-large">login</a><br><br>
  <a href="farmers/signup/register.html" class="waves-effect green waves-light btn">register</a><br><br><br>
  <a href="public/reports.php" class="waves-effect green waves-light btn-small">View Reports</a>
  <a href="public/graphs.php" class="waves-effect green waves-light btn-small">View Analysis</a>
</div>

</body>
</html>