@extends('defLayout')
	@section('music')
	<div class="container-fluid">
	<div class="row">
	
		<div class="min-vh-100 col-sm-12  col-lg-12 col-xl-12  srednji">
			<div class="container">		
				<div class="row">
					<div class="col-10 mx-auto">
						<h1>“One day, all your hard work will pay off.”</h1>
													
						<div style="padding-top: 30px;">
							<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for music..">
							<table id="myTable">
							<tr class="header">
								<th style="width:60%;">Title</th>
								<th style="width:40%;">Artist</th>
								<th style="width:40%;">Duration</th>
								<th style="width:20%;">Selected</th>
							</tr>
							<tr>
								<td>Education</td>
								<td>Alfred Josh</td>
								<td>03:50 min</td>
								<td><label class="odabir">
									<input type="checkbox">
									<span class="checkmark"></span>
									</label>
								</td>
							</tr>
							<tr>
								<td>The happiness</td>
								<td>Maurice Ericson</td>
								<td>02:29 min</td>
								<td><label class="odabir">
									<input type="checkbox">
									<span class="checkmark"></span>
									</label>
								</td>
							</tr>
							<tr>
								<td>Soul Healing Meditation</td>
								<td>Emma Burgundy</td>
								<td>02:29 min</td>
								<td><label class="odabir">
									<input type="checkbox">
									<span class="checkmark"></span>
									</label>
								</td>
							</tr>
							<tr>
								<td>Morning Light</td>
								<td>Morgan Lolas</td>
								<td>03:50 min</td>
								<td><label class="odabir">
									<input type="checkbox">
									<span class="checkmark"></span>
									</label>
								</td>
							</tr>
							<tr>
								<td>Education</td>
								<td>Alfred Josh</td>
								<td>05:10 min</td>
								<td><label class="odabir">
									<input type="checkbox">
									<span class="checkmark"></span>
									</label>
								</td>
							</tr>
							<tr>
								<td>The happiness</td>
								<td>Maurice Ericson</td>
								<td>02:29 min</td>
								<td><label class="odabir">
									<input type="checkbox">
									<span class="checkmark"></span>
									</label>
								</td>
							</tr>
							<tr>
								<td>Soul Healing Meditation</td>
								<td>Emma Burgundy</td>
								<td>03:50 min</td>
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
			</div>					
		</div>
		
		
		
	</div>
	</div>
	@endsection