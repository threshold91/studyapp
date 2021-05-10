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
<body style= "display: flex;">


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <div class="container-fluid" style="height: 1080px">


<!--main-container-part-->
<div id="content" class="content" >

@include('sidebar')

  @yield('main')
 
  @include('sideCalendar')


</div>
<div id="first"> </div>

</div>

  </body>
</html>

<script>

$('.stopwatchStart').click(function (event) {
	
	event.preventDefault();

        $('.container2').load($(this).attr('href'));
		console.log("jes");
    });

</script>