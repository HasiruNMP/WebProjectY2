<html>
    <head>
        <title>
            Web Master
        </title>
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
        
    </body>
</html>

