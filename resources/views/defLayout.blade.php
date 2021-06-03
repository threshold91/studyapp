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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</head>

<body>

<div class="container-fluid">
  <div class="row">
    <div class="min-vh-100 col-sm-12 col-md-12 col-lg-2 col-xl-2  lijevi"> 
		<div class="form-group">
			<img class="logo" src="img/logo.png" alt="image" />
			<h1 class="naslov">StudyPie</h1>
		</div>
		<div class="container linkovi">
			<div class="form-group">
				<img class="profilna" src="{{ Auth::user()->profile_photo_path }}" alt="image" />
			</div>
			
			<ul class="nav flex-column justify-content-center">
				{{ Auth::user()->name }}
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
					<li class="nav-item">
						<form method="POST" action="{{ route('logout') }}">
							@csrf
		
							<x-jet-dropdown-link class="nav-link " href="{{ route('logout') }}"
									onclick="event.preventDefault();
											this.closest('form').submit();">
								{{ __('Log Out') }}
							</x-jet-dropdown-link>
						</form>
					</li>

			</ul>
		</div>
		<div id="test">

		
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
    <div class="min-vh-100 col-sm-12  col-md-12  col-lg-10 col-xl-10 ">
			<div class="row" id="yield">	
				@yield('main')
				@yield('calendar')
				@yield('groups')
				@yield('music')
				@yield('statistics')
			</div>			
	</div>
  </div>

</div>

</body>


