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
	<script src="myScript.js"></script>
</head>

<body>

<div class="container-fluid">
  <div class="row">
    <div class="min-vh-100 col-sm-12 col-lg-2 col-xl-2 order-lg-1 order-sm-2 lijevi"> 
		<div class="form-group">
			<img class="logo" src="img/logo.png" alt="image" />
			<h1 class="naslov">StudyPie</h1>
		</div>
		<div class="container linkovi">
			<div class="form-group">
				<img class="profilna" src="img/prof.png" alt="image" />
			</div>
			<ul class="nav flex-column">
			<li class="nav-item">
					<li class="nav-item">
					  <a class="nav-link" href="dashboard">Home</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="calendar">Calendar</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="music">Music</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link " href="groups">Groups</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link " href="statistics">Statistics</a>
					</li>
			</ul>
		</div>
		<div class="container sbud">
			<h2 style="padding-bottom: 20px;">Study Buddies</h2>
			<ul class="buddies">
				<li>
				<img src="img/av1.png" alt="Avatar" class="avatar">
				<p> Emma Maus</p>
				</li>
				<li>
				<img src="img/av2.png" alt="Avatar" class="avatar">
				<p> Steven Pat </p>
				</li>
				<li>
				<img src="img/av3.png" alt="Avatar" class="avatar">
				<p> Roger Doe</p>
				</li>
			</ul>
		</div>
	
	</div>
    <div class="min-vh-100 col-sm-12  col-lg-10 col-xl-10 order-lg-2 order-sm-1 srednji">
		<div class="container">		
			<div class="row">
				<div class="col-10 mx-auto">
					<h1>“One day, all your hard work will pay off.”</h1>
				
					
					<section id="s-team" class="section" style="padding-top:30px;">	
						<div class="b-skills">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="skill-item center-block">
											<div class="chart-container">
												<div class="chart " data-percent="83" data-bar-color="#23afe3">
													<span class="percent" data-after="%">83</span>
												</div>
											</div>

											<p>WORK</p>
										</div>
									</div>

									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="skill-item center-block">
											<div class="chart-container">
												<div class="chart " data-percent="58" data-bar-color="#a7d212">
													<span class="percent" data-after="%">58</span>
												</div>
											</div>

											<p>SHORT BREAK</p>
										</div>
									</div>

									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="skill-item center-block">
											<div class="chart-container">
												<div class="chart " data-percent="35" data-bar-color="#edc214">
													<span class="percent" data-after="%">35</span>
												</div>
											</div>

											<p>LONG BREAK</p>
										</div>
									</div>

									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="skill-item center-block">
											<div class="chart-container">
												<div class="chart " data-percent="15" data-bar-color="#ff4241">
													<span class="percent" data-after="%">15</span>
												</div>
											</div>

											<p>IDLE</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<br>
				
					<div>
						<p>Biology</p>
						<div class="skil">
						  <div class="skills html">43%</div>
						</div>

						<p>Chemistry</p>
						<div class="skil">
						  <div class="skills css">75%</div>
						</div>

						<p>Math</p>
						<div class="skil">
						  <div class="skills js">65%</div>
						</div>

						<p>Programming</p>
						<div class="skil">
						  <div class="skills php">54%</div>
						</div>
					<div>
					
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