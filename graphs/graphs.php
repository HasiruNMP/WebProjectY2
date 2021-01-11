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
       
       <!--<tr><th><?php #echo $row['croptype'];?></th> <th><?php #echo $row['count'];?></th></tr>-->
     



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


     <script type="text/javascript">
       google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Status', 'Percentage'],
          ["Successfull Transactions", 60],
          ["Wasted Products", 11],
          ]);

        var options = {
          title: 'Report Status',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Report Status',
                   subtitle: 'Status by percentage' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>

    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['City',   'Latitude'],
          ['Kandy', 7], 
          ['Colombo', 6], 
          
        ]);

        var options = {
          region: 'LK', // Africa
          colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
          backgroundColor: '#81d4fa',
          datalessRegionColor: '#f8bbd0',
          defaultColor: '#f5f5f5',
        };

        var chart = new google.visualization.GeoChart(document.getElementById('geochart-colors'));
        chart.draw(data, options);
      };
    </script>

       <script type='text/javascript'>
     google.charts.load('current', {
       'packages': ['geochart'],
       // Note: you will need to get a mapsApiKey for your project.
       // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
       'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
     });
     google.charts.setOnLoadCallback(drawMarkersMap);

      function drawMarkersMap() {
      var data = google.visualization.arrayToDataTable([
        ['City',   'Population', 'Area'],
        ['Rome',      2761477,    1285.31],
        ['Milan',     1324110,    181.76],
        ['Naples',    959574,     117.27],
        ['Turin',     907563,     130.17],
        ['Palermo',   655875,     158.9],
        ['Genoa',     607906,     243.60],
        ['Bologna',   380181,     140.7],
        ['Florence',  371282,     102.41],
        ['Fiumicino', 67370,      213.44],
        ['Anzio',     52192,      43.43],
        ['Ciampino',  38262,      11]
      ]);

      var options = {
        region: 'Ll',
        displayMode: 'markers',
        colorAxis: {colors: ['green', 'blue']}
      };

      var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    };
    </script>
      <div id="piechart" ></div>
     <div id="top_x_div" style="width: 600px; height: 400px;"></div>
      <div id="geochart-colors" style="width: 700px; height: 433px;"></div>
       <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>
</html>
