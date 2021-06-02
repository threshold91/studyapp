@extends('defLayout')
	@section('groups')
		<div class="container-fluid">
		<div class="row">
			<div class="min-vh-100 col-sm-12  col-lg-12 col-xl-12 srednji" >
				<div class="container">		
					<div class="row">
						<div class="col-10 mx-auto">
							<h1>“One day, all your hard work will pay off.”</h1>
							
							<div class="container srednji">
									
						
								<div class="dropdown d-flex justify-content-center">
								<span><h4>Math</h4></span>
								<div class="dropdown-content">
									<p>Project status</p>
									<div class="skil">
									<div class="skills html">43%</div>
									</div>
									<br>
									<ul class="buddies" style="height: 300px;">
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
										<li>
										<img src="img/av2.png" alt="Avatar" class="avatar">
										<p> Johan Averice </p>
										</li>
										<li>
										<img src="img/av1.png" alt="Avatar" class="avatar">
										<p> Natalia Deor</p>
										</li>
									</ul>
									
									<div style="padding-top: 30px;">						
										<table id="myTable">
										<tr class="header">
											<th style="width:60%;">Task</th>
											<th style="width:40%;">Autkor</th>
											<th style="width:40%;">Due date</th>
											<th style="width:20%;">Status</th>
										</tr>
										<tr>
											<td>Find example researches</td>
											<td>Johan Averice</td>
											<td>07.07.2021.</td>
											<td><label class="odabir">
												<input type="checkbox">
												<span class="checkmark"></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>Make power point presentation</td>
											<td>Steven Pat</td>
											<td>21.06.2021.</td>
											<td><label class="odabir">
												<input type="checkbox">
												<span class="checkmark"></span>
												</label>
											</td>
										</tr>			  
										
										</table>
									</div>	
									
								</div>
								</div>
								<br>
								<div class="dropdown d-flex justify-content-center">
								<span><h4>Biology</h4></span>
								<div class="dropdown-content">
									<p>Waiting for input</p>
								</div>
								</div>
								<br>						
								<div class="dropdown d-flex justify-content-center">
								<span><h4>Chemistry</h4></span>
								<div class="dropdown-content">
									<p>Waiting for input</p>
								</div>
								</div>
								<br>
								<div class="dropdown d-flex justify-content-center">
								<span><h4>Programming</h4></span>
								<div class="dropdown-content">
									<p>Waiting for input</p>
								</div>
								</div>	
							</div>
							
						</div>
					</div>
				</div>					
			</div>	
		</div>
		</div>
	@endsection