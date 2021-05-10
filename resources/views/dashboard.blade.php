@extends('defLayout')



@section('main')
<div class="mh-100 col bg-warning">
	<div class="container2">		
		<div class="row">
			<div class="col-8 mx-auto">
				<h4>Motivational message</h4>
				<h1>Welcome back, keep up with the <b>good work</b></h1>

				<div class="form-group">
					<a href="calculator" class="stopwatchStart"><button type="button" class="btn btn-success mt-3 mr-3">Start Studying</button></a>
				</div>
				<br>
				<div id="demo" class="demo" data-ride="carousel">

					<!-- Indicators -->
					<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="/img/prvi.jpg" alt="Los Angeles">
					</div>
					<div class="carousel-item">
						<img src="/img/drugi.jpg" alt="Chicago">
					</div>
					<div class="carousel-item">
						<img src="/img/treci.jpg" alt="New York">
					</div>
					</div>

					<!-- Left and right controls -->
					<!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
					</a> 
					-->
					</div>

				</div>
			</div>
		</div>
	</div>	


@endsection





