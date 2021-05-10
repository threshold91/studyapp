<div class="row">

	<div class="mh-100 col-2 bg-success"> 
		<div class="form-group">
			<img class="upola" src="/img/drugi.jpg" alt="image" />
		</div>
			<div class="container linkovi">
				<div class="form-group">
					<img class="upola" src="/img/prof.png" alt="image" />
				</div>
				<ul class="nav flex-column">
				{{ Auth::user()->name }}

					<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#">Calendar</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="#">Music</a>
					</li>
					<li class="nav-item">
					<a class="nav-link " href="#">Groups</a>
					</li>
					<li class="nav-item">
					<a class="nav-link " href="#">Statistics</a>
					</li>
				<li class="nav-item">

				<form method="POST" action="{{ route('logout') }}">
						@csrf

						<x-jet-dropdown-link href="{{ route('logout') }}"
								onclick="event.preventDefault();
										this.closest('form').submit();">
							{{ __('Log Out') }}
						</x-jet-dropdown-link>
					</form>
					</li>
				</ul>
			</div>
		</div>
