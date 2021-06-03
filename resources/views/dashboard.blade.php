@extends('defLayout')	
	@section('main')
	<div class="container-fluid ">	
		<div class="row ">
			<div class="min-vh-100 col-sm-12  col-md-6  col-lg-8 col-xl-8  srednji">
				<div class="container">		
					<div class="row">
						<div class="col-10 mx-auto">
							<h4>Welcome Nina, keep up with the <b>good work</b></h4>
							<h1>“One day, all your hard work will pay off.”</h1>
							
											
							<div id="pomodoro-app">
							<div id="tajm">
								<div id="timer">
								<div id="time"><b>
									<span id="minutes">25</span>
									<span id="colon">:</span>
									<span id="seconds">00</span></b>
								</div>
								
								</div>

								<div id="buttons">
								<button id="work" type="button" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off"><b>WORK</b></button>
								<button id="shortBreak" type="button" class="btn" data-toggle="button" aria-pressed="false" autocomplete="off"><b>SHORT BREAK</b></button>
								<button id="longBreak" type="button" class="btn btn-secondary" data-toggle="button" aria-pressed="false" autocomplete="off"><b>LONG BREAK</b></button>
								<button id="stop" type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" autocomplete="off"><b>STOP</b></button>
								</div>
							</div>
							</div>
							
							<img src="img/kuh.gif" alt="cutting onions" >
							
						</div>
					</div>
				</div>					
			</div>
			
			<div class="min-vh-100 col-sm-12 col-md-6 col-lg-4 col-xl-4  desni" > 
				<div class="container">
				<h2 class="header">Monday</h2>
				<div class="d-flex justify-content-center">
					<b><a href="#" class="previous round">&#8249;</a></b>
					<p>12.6.2021.</p> 
					<b><a href="#" class="next round">&#8250;</a></b>
				</div>          
				<table class="table">
					<thead>
					<tr>
						<th>Title</th>
						<th>Time</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>Biology</td>
						<td>10:00 - 12:00</td>
					</tr>
					<tr>
						<td>Chemistry</td>
						<td>14:00 - 15:00</td>
					</tr>
					<tr>
						<td>Math</td>
						<td>15:00 - 16:00</td>
					</tr>
					</tbody>
				</table>
				
					<div id="myDIV" class="header">
					<hr><h2 class="header">Notes</h2>
					<input type="text" id="myInput" placeholder="Title...">
					<span onclick="newElement()" class="addBtn" ><b>ADD</b></span>
					</div>

					<ul id="myUL">
					<li>Read a book</li>
					<li class="checked">Meet with Anna</li>
					<li>Buy coffee</li>
					<li>Water all plants</li>
					
					</ul>
				</div>
			
			</div>
		
		</div>
	</div>	
	@endsection
