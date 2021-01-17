
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../img/logo.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>
<nav class="grey darken-3">
        <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="../index.php">Welcome</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="graphs.php"><b>Graphs</b></a></li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href = "../farmers/login/login-farmers.php" class="waves-effect waves-light btn green">Log In <i class="material-icons  right">account_circle</i></a></li>
        </ul>
        </div>
        </nav>
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

  $crops = array();
  $result = mysqli_query($conn,"SELECT * FROM stat_crops");
  if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_array($result)) {
      $crops[] = $row;
    }

  }
  else{
      echo "No result found";
  }

  $result = mysqli_query($conn,"SELECT * FROM stat_farmers");
  if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_array($result)) {
      $farmers[] = $row;
      
    }

  }
  else{
      echo "No result found";
  }

  $result = mysqli_query($conn,"SELECT * FROM stat_reports");
  if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_array($result)) {
      $reports[] = $row;
    }

  }
  else{
      echo "No result found";
  }
?>

<div class="container">
<div class="row"><h4>Crop Types</h4></div>
  <div id="crops" class="row" style="width:800px; margin:0 auto;">
  
  
  </div>
  <div class="row"><h4>Succesfull Transactions</h4></div>
  <div id="transactions" class="row" style="height:400px; width:800px; margin:0 auto;">
  </div>
  <div class="row"><h4>Farmers' Locations</h4></div>
  <div id="farmers" class="row center-align" style="height:800px; width:800px; margin:0 auto;">
  </div>
</div>



<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    
    var data = google.visualization.arrayToDataTable([
      ['Fruit', 'Number of Reports'],
      ['Fruits',<?php echo $crops[0]['count']; ?>],
      ['Grains',<?php echo $crops[1]['count']; ?>],
      ['Vegetables',<?php echo $crops[2]['count']; ?>],
      
    ]);


      var options = {'title':'Reports Amount by Crop Type', 'width':1000, 'height':700};

    var chart = new google.visualization.PieChart(document.getElementById('crops'));

    chart.draw(data, options);

  }
</script>


<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawStuff);

  function drawStuff() {
    var data = new google.visualization.arrayToDataTable([
      ['Status', ''],
      ["Successfull Transactions", <?php echo $reports[0]['count']; ?>,],
      ["Wasted Products", <?php echo $reports[1]['count']; ?>,],
      ]);

    var options = {
      title: 'Report Status',
      width: 900,
      legend: { position: 'none' },
      chart: { title: 'Succesfull Transactions vs Wasted',
                subtitle: '' },
      bars: 'horizontal', // Required for Material Bar Charts.
      axes: {
        x: {
          0: { side: 'top', label: 'Count'} // Top x-axis.
        }
      },
      bar: { groupWidth: "90%" }
    };

    var chart = new google.charts.Bar(document.getElementById('transactions'));
    chart.draw(data, options);
  };
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['District', 'Number of Farmers'],
          ['Ampara', <?php echo $farmers[0]['count']; ?> ],
          ['Anuradhapura',<?php echo $farmers[1]['count']; ?> ],
          ['Badulla',<?php echo $farmers[2]['count']; ?> ],
          ['Batticaloa', <?php echo $farmers[3]['count']; ?>],
          ['Colombo', <?php echo $farmers[4]['count']; ?>],
          ['Galle', <?php echo $farmers[5]['count']; ?>],
          ['Gampaha', <?php echo $farmers[6]['count']; ?>],
          ['Hambantota', <?php echo $farmers[7]['count']; ?>],
          ['Jaffna', <?php echo $farmers[8]['count']; ?>],
          ['Kalutara', <?php echo $farmers[9]['count']; ?>],
          ['Kandy', <?php echo $farmers[10]['count']; ?>],
          ['Kegalla', <?php echo $farmers[11]['count']; ?>],
          ['Kilinochchi', <?php echo $farmers[12]['count']; ?>],
          ['Kurunegala', <?php echo $farmers[13]['count']; ?>],
          ['Mannar', <?php echo $farmers[14]['count']; ?>],
          ['Matale', <?php echo $farmers[15]['count']; ?>],
          ['Matara', <?php echo $farmers[16]['count']; ?>],
          ['Monaragala', <?php echo $farmers[17]['count']; ?>],
          ['Mullaittivu', <?php echo $farmers[18]['count']; ?>],
          ['Nuwara Eliya', <?php echo $farmers[19]['count']; ?>],
          ['Polonnaruwa', <?php echo $farmers[20]['count']; ?>],
          ['Puttalam', <?php echo $farmers[21]['count']; ?>],
          ['Ratnapura', <?php echo $farmers[22]['count']; ?>],
          ['Trincomalee', <?php echo $farmers[23]['count']; ?>],
          ['Vavuniya', <?php echo $farmers[24]['count']; ?>]
 
        ]);

        var options = {
          chart: {
            title: "Number of Registered Farmers by District ",
            subtitle: '',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('farmers'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>



</body>
</html>
