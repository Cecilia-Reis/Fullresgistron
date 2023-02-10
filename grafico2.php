


<head>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['10:00',  0 ],
          ['14:00',  200],
          ['18:00',  660],
          ['20:00',  1030]
        ]);

        var options = {
          title: 'Reporte',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>  
<div style="display:inline-block; margin:4rem;">
    <div id="curve_chart" style="width: 600px; height: 400px;"></div>
    </div>
</body>