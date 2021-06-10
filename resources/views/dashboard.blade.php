@extends('defLayout')	

	@section('main')

	<div class="min-vh-100 col-sm-12  col-md-6  col-lg-8 col-xl-8  srednji">
		<div class="container">		
			<div class="row">
				<div class="col-10 mx-auto">
					<h4>Welcome {{ Auth::user()->ime }}, keep up with the <b>good work</b></h4>
					<?php	
							$quoteList = array(
									"\"One day, all your hard work will pay off.\"", 
									"\"Nothing is impossible. The word itself says: I'm possible!\"", 
									"\"If I cannot do great things, I can do small things in a great way.\"", 
									"\"The bad news is time flies. The good news is you're the pilot.\"",
									"\"The best way to get started is to quit talking and begin doing.\"",
									"\"Light tomorrow with today!\"",
									"\"This time next year we will be millionaires!\"",
									"\"Just keep swimming, just keep swimming!",
									"\"Carpe diem. Seize the day. Make your life extraordinary.\"",
									"\"To me, you are perfect.\"",
									"\"Remember, no man is a failure who has friends.\"",
									"\"If you want to win you cannot lose!\"",
									"\"You will ride eternal, shiny and chrome.\"",
									"\"In every job that must be done there is an element of fun.\"",
									"\"Even miracles take a little time.\"",
									"\"Anything is possible when you have inner peace.\"",
									"\"Oh yes, the past can hurt. But you can either run from it or learn from it.\"",
									"\"Sometimes, the right path is not the easiest one.\"",
									"\"Do or do not - there is no try.\"",
									"\"All we have to decide is what to do with the time that is given to us.\"",
									"\"It's not the broken dreams that break us. It's the ones we don't dare to dream.\"",
									"\"Bazinga!\"",
									"\"Witness me!\""
								);
						?>
							<h1><?php echo $quoteList[mt_rand(0, count($quoteList)-1)]; ?></h1>	
					
									
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
						  <button id="work" type="button" value="Play" class="btn " data-toggle="button" aria-pressed="false" autocomplete="off"><b>WORK</b></button>
						  <button id="shortBreak" type="button" class="btn" data-toggle="button" aria-pressed="false" autocomplete="off"><b>SHORT BREAK</b></button>
						  <button id="longBreak" type="button" class="btn " data-toggle="button" aria-pressed="false" autocomplete="off"><b>LONG BREAK</b></button>
						  <button id="stop" type="button" class="btn" data-toggle="button" aria-pressed="false" autocomplete="off"><b>STOP</b></button>
						  <audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mpeg">
							<source type="audio/mp3" src="http://www.archive.org/download/bolero_69/Bolero.mp3">
							Sorry, your browser does not support HTML5 audio.
							</audio>
						</div>
					  </div>
					</div>
					<div class="giftainter">
						<img src="img/kuh.gif" alt="cutting onions" >			
					</div>
					
					
				</div>
			</div>
		</div>					
	</div>
	
	<div class="min-vh-100 col-sm-12 col-md-6 col-lg-4 col-xl-4  desni" > 
		<div class="container">
		  <h2 class="header">Monday</h2>
		  <div class="d-flex justify-content-center">
			  <b><a href="#" class="previous round" style="padding:0.1px 16px 7px;
				font-size:xx-large;">&#8249;</a></b>
			  <p>12.6.2021.</p> 
			  <b><a href="#" class="next round" style="padding:0.1px 16px 7px;
				font-size:xx-large;">&#8250;</a></b>
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
			

		

	@endsection
<script> 



		var pomodoro = {
		started : false,
		minutes : 0,
		seconds : 0,
		fillerHeight : 0,
		fillerIncrement : 0,
		interval : null,
		minutesDom : null,
		secondsDom : null,
		fillerDom : null,
		init : function(){
		var self = this;
		
		this.minutesDom = document.querySelector('#minutes');
		this.secondsDom = document.querySelector('#seconds');
		this.fillerDom = document.querySelector('#filler');
		this.interval = setInterval(function(){
			self.intervalCallback.apply(self);
		}, 1000);
		document.querySelector('#work').onclick = function startr(){
			self.startWork.apply(self);
		
		};
		document.querySelector('#shortBreak').onclick = function(){
			self.startShortBreak.apply(self);
		};
		document.querySelector('#longBreak').onclick = function(){
			self.startLongBreak.apply(self);
		};
		document.querySelector('#stop').onclick = function(){
			self.stopTimer.apply(self);
		};

		},
		resetVariables : function(mins, secs, started){
		this.minutes = mins;
		this.seconds = secs;
		this.started = started;
		this.fillerIncrement = 200/(this.minutes*60);
		this.fillerHeight = 0;  
		},
		startWork: function() {
		this.resetVariables(25, 0, true);
		},
		startShortBreak : function(){
		this.resetVariables(5, 0, true);
		},
		startLongBreak : function(){
		this.resetVariables(15, 0, true);
		},
		stopTimer : function(){
		this.resetVariables(25, 0, false);
		this.updateDom();
		},
		toDoubleDigit : function(num){
		if(num < 10) {
			return "0" + parseInt(num, 10);
		}
		return num;
		},
		updateDom : function(){
		this.minutesDom.innerHTML = this.toDoubleDigit(this.minutes);
		this.secondsDom.innerHTML = this.toDoubleDigit(this.seconds);
		this.fillerHeight = this.fillerHeight + this.fillerIncrement;
		this.fillerDom.style.height = this.fillerHeight + 'px';
		},
		intervalCallback : function(){
		if(!this.started) return false;
		if(this.seconds == 0) {
			if(this.minutes == 0) {
			this.timerComplete();
			return;
			}
			this.seconds = 59;
			this.minutes--;
		} else {
			this.seconds--;
		}
		this.updateDom();
		},
		timerComplete : function(){
		this.started = false;
		this.fillerHeight = 0;
		}
		};
		window.onload = function(){
		pomodoro.init();
		};
	
</script>