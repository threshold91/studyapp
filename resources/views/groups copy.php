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
			<ul class="nav flex-column justify-content-center">
				
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
    <div class="min-vh-100 col-sm-12  col-lg-10 col-xl-10 order-lg-2 order-sm-1 srednji" >
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

</body>