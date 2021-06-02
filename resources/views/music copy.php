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




</body>