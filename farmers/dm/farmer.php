<?php
session_start();
if ( isset( $_SESSION['femail'] ) ) 
{}
else 
{
	//$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
	header("Location: ../login/login-farmers.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="app-farmer.js"></script>
<link rel="icon" href="../../img/logo.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Messages</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>
    <script>  
        // firebase configuration
        var firebaseConfig = {
          apiKey: "AIzaSyChNqC7x16YTPbbdGY7qcJkcKkW_yGR2sE",
          authDomain: "webprojecty2.firebaseapp.com",
          databaseURL: "https://webprojecty2-default-rtdb.firebaseio.com",
          projectId: "webprojecty2",
          storageBucket: "webprojecty2.appspot.com",
          messagingSenderId: "407916551388",
          appId: "1:407916551388:web:4ea40875e59ea900ff6819",
          measurementId: "G-4DSM5DVJN6"
        };
        // initialize Firebase
        firebase.initializeApp(firebaseConfig);
        // db variable
        var db = firebase.firestore();
    </script>
    
    <link rel="icon" href="../../img/logo.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<nav class="grey darken-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="../../reports/farmer-view-reports.php">My Reports</a></li>
        <li><a href="../../reports/farmer-add-report.php">Add New Report</a></li>
        <li><a href="#"><b>Messages</b></a></li>
        <li><a href="../graphs/graphs.php">Graphs</a></li>
    </ul>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../login/logout.php" class="waves-effect waves-light btn grey">Log Out<i class="material-icons  right">account_circle</i></a></li>
    </ul>
    </div>
</nav>

<div class="container">

    <div class="card-panel teal">

        <div class="row green">
            <p id="sender">Sender</p>
        </div>

        <div class="row grey lighten-3" id="chat-main">
        </div>

        <div class="row center grey lighten-4">
            <div class="col s8">
                <input type="text" id="typedmessage" name="typedmessage">
            </div>
            <div class="col s2 ">
                <button onclick="sendmessage('<?php echo $_SESSION['femail'] ?>')" class="btn waves-effect waves-light">Send<i class="material-icons right">send</i></button>
            </div>
        </div>
    </div>

</div>

<script>
    //mcountListener()
    initChat('<?php echo $_SESSION['femail'] ?>');
</script>






















</body>
</html>