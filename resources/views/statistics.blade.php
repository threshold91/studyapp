@extends('defLayout')
	@section('statistics')
	<div class="container-fluid">
		<div class="row">

			<div class="min-vh-100 col-sm-12  col-lg-12 col-xl-12  srednji">
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
	@endsection

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