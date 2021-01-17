<?php
session_start();
if ( isset( $_SESSION['femail'] ) ) 
{
    $email = $_SESSION['femail'];
    //echo $email;
}
else 
{
	//$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
	header("Location: ../login/login-staff.php");
	exit;
}
?>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dD4aW06XoB";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    //echo "Server Not connected";
  }
  else{
    //alert("Message");
  }

  if(!mysqli_select_db($conn,$dbname)){
    //echo "Database Not Selected";
  }

  else{
    //echo "Database Selected";
  }

  $user = array();
  $result = mysqli_query($conn,"SELECT * FROM farmers WHERE email = '$email'");
  if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_array($result)) {
      $user[] = $row;
    }

  }
  else{
      echo "No result found";
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../img/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Messages</title>
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
    <script src="app-farmer.js"></script>
   
    <style>
        .row{
            padding: 5px;
            border: 1px;
            margin: 5px;
        }
        .col{
            padding: 5px;
            border: 1px;
            margin: 5px;
        }
        #all{
            margin-top: 20px;
        }
        #list{
            height: 700px;
        }
        #top{
            height: 50px;
        }
        #chat{
            height: 590px;
            overflow-y: auto;
        }
        #type{
            height: 50px;
        }
        #send{
            height: 50px;
        }
        #bottom{
            margin-left: 70px;
            padding: 0px;
            border: 0px;
        }
        /* width */
        ::-webkit-scrollbar {
        width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        background: #f1f1f1; 
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: #888; 
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #555; 
        }
        input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        }
        .msgbox{
            margin: 0 auto;
            padding: 0px;
            height: min-content;
            width: 1235px;
        }
        .msg{
            border-radius: 20px;
            width: max-content;
            height: auto;
            float: right;
        }
        .msg2{
            border-radius: 20px;
            width: max-content;
            height: auto;
            float: left;
        }
        .msgtext{
            margin: 10px;
            padding: 5px;
            border-radius: 10px;
        }
        .fbox{
            margin: 5px;
            cursor: pointer;

        }
        .fimg{
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #list{
            display: block;
            overflow-y: auto;
        }
        #top{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #main{
            margin:0 auto;
        }
    </style>
</head>
<body>
<nav class="grey darken-3">
  <div class="nav-wrapper">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="../reports/farmer-view-reports.php">My Reports</a></li>
        <li><a href="../reports/farmer-add-report.php">Add New Report</a></li>
        <li><a href="messages.php"><b>Messages</b></a></li>
        <li><a href="../reports/all-reports.php">All Reports</a></li>
        <li><a href="../graphs/graphs.php">Graphs</a></li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href = "../login/logout.php" class="waves-effect waves-light btn grey">Log out <i class="material-icons  right">account_circle</i></a></li>
      </ul>
  </div>
</nav>

    <div class="container">
        <div class="row card horizontal grey darken-2" id="all">

            <div class="col s12" id="main">

                <div class="row grey  card horizontal" id="top">
                    <h5 id="fname" class="center-align">Messaging with Keels</h5>
                </div>

                <div class="row grey card horizontal" id="chat">
                    <div class="col" id="chatcont">
                    </div>
                </div>

                <div class="row" id="bottom"> 

                    <div class="col s10 grey card horizontal" id="type">
                        <input type="text" id="mtext" placeholder="Type your message">
                    </div>

                    <div class="col s1 grey card horizontal waves-effect waves-light" id="send" onclick="sendmessage()">
                        <i class="center-align valign-wrapper material-icons right">send</i>
                    </div>

                </div>
            </div>
        </div>
    </div>






















<script>initChat('<?php echo $email; ?>','<?php echo $user[0]['fname'] ?><?php echo $user[0]['lname'] ?>')</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>    
</body>
</html>