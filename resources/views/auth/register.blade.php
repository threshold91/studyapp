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
</head>

<body>

<div class="container-fluid" style="height: 1080px">
  <div class="row">
    <div class="mh-100 col-2 bg-success"> 
		<div class="container">		
			<div class="row">
				<div class="col-8 mx-auto">
					<div class="form-group">
						<img src="/img/drugi.jpg" alt="image" />
					</div>


        <x-slot name="logo">

            <x-jet-authentication-card-logo />

        </x-slot>



        <x-jet-validation-errors class="mb-4" />



        <form method="POST" action="{{ route('register') }}">

            @csrf



            <div>

                <x-jet-label for="name" value="{{ __('Name') }}" />

                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

            </div>



            <div class="mt-4">

                <x-jet-label for="email" value="{{ __('Email') }}" />

                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

            </div>



            <div class="mt-4">

                <x-jet-label for="password" value="{{ __('Password') }}" />

                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            </div>



            <div class="mt-4">

                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />

                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            </div>



            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())

                <div class="mt-4">

                    <x-jet-label for="terms">

                        <div class="flex items-center">

                            <x-jet-checkbox name="terms" id="terms"/>



                            <div class="ml-2">

                                {!! __('I agree to the :terms_of_service and :privacy_policy', [

                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',

                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',

                                ]) !!}

                            </div>

                        </div>

                    </x-jet-label>

                </div>

            @endif



            <div class="flex items-center justify-end mt-4">

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">

                    {{ __('Already registered?') }}

                </a>



                <x-jet-button class="btn btn-primary">

                    {{ __('Register') }}

                </x-jet-button>

            </div>

        </form>




</div>
			</div>
		</div>
	
	</div>
    <div class="mh-100 col bg-warning">
	
		<div class="container">		
			<div class="row">
				<div class="col-8 mx-auto">
					<div id="demo" class="carousel slide" data-ride="carousel">

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
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					  </a>

					</div>
				</div>
			</div>
		</div>
					
					
	</div>
  </div>
</div>