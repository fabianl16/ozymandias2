@extends('layouts.layout')


@section('content')
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
<body>
<div id="graphic"> 
	<div class="container">
		<div class="section-title">
			<h2>Grafica</h2>
			
		</div>
		<div class="row">
			<div id="curve_chart" style="width: 900px; height: 500px"></div>

			
		</div>
			
		</div>
		
	</div>
</div>		
	
</body>







@include('layouts.footer')            



@endsection