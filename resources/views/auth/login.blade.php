<!DOCTYPE html>
<html>
<head>
	<title>StudyPie</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script src="/scripts/myScript.js"></script>
</head>

<body>

<div class="container-fluid">
  <div class="row">
    <div class="min-vh-100 col-sm-12 col-lg-2 col-xl-2 order-lg-1 lijevi"> 
		<div class="container">
					<div class="form-group linkovi">
						<img src="/img/logo.png" alt="image" />
						<h1 class="naslov">StudyPie</h1>
					</div>
					
					@if (session('status'))
						<div class="mb-4 font-medium text-sm text-green-600">
							{{ session('status') }}
						</div>
					@endif

					<div style="padding-top: 50px;">
						<form method="POST" action="{{ route('login') }}">
							@csrf

							<div class="form-group">
								<x-jet-label for="email" value="{{ __('Email') }}" />
								<x-jet-input  id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter email" />				
							</div>

							<br><br>

							<div class="form-group">				
								<x-jet-label for="password" value="{{ __('Password') }}" />
								<x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Enter password" />				
							</div>

							
						
							<br>
						
							<div class="form-group" style="padding-top: 50px;">
								@if (Route::has('password.request'))
									<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
										{{ __('Forgot your password?') }}
									</a>
								@endif
								<x-jet-button type="submit" class="btn mt-3 mr-3" style="background-color: #a2d0c1; color:black!important"><b>{{ __('Login') }}</b></x-jet-button>
							</div>

							<div class="form-group"> 
								@if (Route::has('register'))
					
									<a href="{{ route('register') }}">
										<button type="button" class="btn btn-light mt-3 mr-3"><b>Register</b></button>
									</a>
								@endif
							</div>

						</form>	
						
						
					</div>
		</div>
		
	
	</div>
    <div class="min-vh-100 col-sm-12  col-lg-10 col-xl-10 order-lg-2 srednji">
		<div class="container">		
			<div class="row">
				<div class="col-8 mx-auto">
				
					<div id="demo" class="carousel slide" data-ride="carousel" style="">

					  <!-- Indicators -->
					  <ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					  </ul>

					  <!-- The slideshow -->
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img src="/img/prvi.png" alt="pic">
						</div>
						<div class="carousel-item">
						  <img src="/img/drugi.png" alt="pic">
						</div>
						<div class="carousel-item">
						  <img src="/img/treci.png" alt="pic">
						</div>
						<div class="carousel-item">
						  <img src="/img/cetvrti.png" alt="pic">
						</div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					  </a>

					</div>
					
					
				
					
					
				</div>
			</div>
		</div>					
	</div>
	
	
	
  </div>
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="plugins/jquery-2.2.4.min.js"></script>
 <script src="plugins/jquery.appear.min.js"></script>
 <script src="plugins/jquery.easypiechart.min.js"></script> 

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Math', 2],
  ['TV', 4],
  ['Excercise', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}



 'use strict';

var $window = $(window);

function run()
{
	var fName = arguments[0],
		aArgs = Array.prototype.slice.call(arguments, 1);
	try {
		fName.apply(window, aArgs);
	} catch(err) {
		 
	}
};
 
/* chart
================================================== */
function _chart ()
{
	$('.b-skills').appear(function() {
		setTimeout(function() {
			$('.chart').easyPieChart({
				easing: 'easeOutElastic',
				delay: 3000,
				barColor: '#369670',
				trackColor: '#fff',
				scaleColor: false,
				lineWidth: 21,
				trackWidth: 21,
				size: 250,
				lineCap: 'round',
				onStep: function(from, to, percent) {
					this.el.children[0].innerHTML = Math.round(percent);
				}
			});
		}, 150);
	});
};
 

$(document).ready(function() {
  
	run(_chart);
  
    
});







</script>





</body>