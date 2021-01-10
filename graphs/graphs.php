<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dD4aW06XoB";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){echo "Server Not connected";}
  else{echo "Server connected";}
  if(!mysqli_select_db($conn,$dbname)){echo "Database Not Selected";}
  else{echo "Database Selected";}

  $result = mysqli_query($conn,"SELECT * FROM stat_crops");

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      echo $row['reportCount'];
    }
  }

  ?>  

  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
      <div id="piechart"></div>
</body>
</html>