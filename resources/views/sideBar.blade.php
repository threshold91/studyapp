
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
					  <a class="nav-link" href="groups">Groups</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="statistics">Statistics</a>
					</li>
					<li class="nav-item">
						<form method="POST" action="{{ route('logout') }}">
							@csrf
		
							<x-jet-dropdown-link class="nav-link" href="{{ route('logout') }}"
									onclick="event.preventDefault();
											this.closest('form').submit();">
								{{ __('Log Out') }}
							</x-jet-dropdown-link>
						</form>
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

</div>

<script>
/*
	$(function(){
        //mijenja aktivnu klasu
		$('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
		$('.nav a').click(function(){

			$(this).parent().addClass('active').siblings().removeClass('active')	

		})
    })
  */  
    $('.nav-link').click(function (event) {
        

        // Avoid the link click from loading a class="item-nav" class="item-nav" new page
        event.preventDefault();
        // Load the content from the link's href attribute
        $('.content').load($(this).attr('href'));
      


    });

</script>