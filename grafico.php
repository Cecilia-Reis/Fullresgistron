
<head>  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['BancoCash', 11],
          ['People Privity',   4],
          ['Controll',   3],
          ['Bank ',2],
          ['CDF',  7]
        ]);
 
        var options = {
          title: 'Empresas'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
</head>
<body>  
  <div style="display:inline-block; margin:4rem;">
    <div id="piechart" style="width: 600px; height: 400px;"></div>
    </div>
</body>
</html>