<html>
    <head>
        <title>
            Web Master
        </title>
        
<link rel="icon" href="../../img/logo.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head> 
    <body>
        <script type="text/javascript">
            
     function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }

        </script>
<nav class="grey darken-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="#">Create Staff Account</a></li>
    </ul>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="logout.php" class="waves-effect green waves-light btn">Log Out<i class="material-icons  right">account_circle</i></a></li>
    </ul>
    </div>
</nav>
<div class="container">
        <h3>
            Please Fill the Details below.
        </h3>
        <form action="stroring webmaster details.php" method="post" enctype="multipart/form-data" >
            <label for="name">Name</label><br>
            <input type="text" name="name" placeholder="Name" required> <br>
       
            <label for="username">Username</label><br>
            <input type="text" name="usname" placeholder="Username" required><br>
            <label>Password :</label><br>
             <input name="password" id="password" type="password" required /><br>
             <label>Confirm Password:</label> <br>
             <input type="password" name="confirm_password" id="confirm_password" required/> <br>
            <input type="submit" name="submit" value="Submit" onclick="return Validate()">
        </form>
        </div>
    </body>
</html>

