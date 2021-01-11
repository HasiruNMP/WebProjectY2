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
  ?>
  <table border="1" align="center" width="30%">
  <?php
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) { ?> <br>
       
       <tr><th><?php echo $row['croptype'];?></th> <th><?php echo $row['count'];?></th></tr>
     



      <?php
    }
  }
?>
  

  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
       
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Fruits',  23],
          ['Grains',      30],
          ['Vegetables',  43],
         
        ]);


          var options = {'title':'Crops Statistic', 'width':1000, 'height':700};

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);

      }
    </script>
      <div id="piechart" align="center"></div>
</body>
</html>