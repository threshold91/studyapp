// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something in order to add the note to the list!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}






function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}









/*kalendar*/

jQuery(document).ready(function(){
  jQuery('.datetimepicker').datepicker({
      timepicker: true,
      language: 'en',
      range: true,
      multipleDates: true,
		  multipleDatesSeparator: " - "
    });
  jQuery("#add-event").submit(function(){
      alert("Submitted");
      var values = {};
      $.each($('#add-event').serializeArray(), function(i, field) {
          values[field.name] = field.value;
      });
      console.log(
        values
      );
  });
});

(function () {    
    'use strict';
    // ------------------------------------------------------- //
    // Calendar
    // ------------------------------------------------------ //
	jQuery(function() {
		// page is ready
		jQuery('#calendar').fullCalendar({
			themeSystem: 'bootstrap4',
			// emphasizes business hours
			businessHours: false,
			defaultView: 'month',
			// event dragging & resizing
			editable: true,
			// header
			header: {
				left: 'title',
				center: 'month,agendaWeek,agendaDay',
				right: 'today prev,next'
			},
			events: [
				{
					title: 'Barber',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-05-05',
					end: '2020-05-05',
					className: 'fc-bg-default',
					icon : "circle"
				},
				{
					title: 'Flight Paris',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-08T14:00:00',
					end: '2020-08-08T20:00:00',
					className: 'fc-bg-deepskyblue',
					icon : "cog",
					allDay: false
				},
				{
					title: 'Team Meeting',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-07-10T13:00:00',
					end: '2020-07-10T16:00:00',
					className: 'fc-bg-pinkred',
					icon : "group",
					allDay: false
				},
				{
					title: 'Meeting',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-12',
					className: 'fc-bg-lightgreen',
					icon : "suitcase"
				},
				{
					title: 'Conference',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-13',
					end: '2020-08-15',
					className: 'fc-bg-blue',
					icon : "calendar"
				},
				{
					title: 'Baby Shower',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-13',
					end: '2020-08-14',
					className: 'fc-bg-default',
					icon : "child"
				},
				{
					title: 'Birthday',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-09-13',
					end: '2020-09-14',
					className: 'fc-bg-default',
					icon : "birthday-cake"
				},
				{
					title: 'Restaurant',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-10-15T09:30:00',
					end: '2020-10-15T11:45:00',
					className: 'fc-bg-default',
					icon : "glass",
					allDay: false
				},
				{
					title: 'Dinner',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-11-15T20:00:00',
					end: '2020-11-15T22:30:00',
					className: 'fc-bg-default',
					icon : "cutlery",
					allDay: false
				},
				{
					title: 'Shooting',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-08-25',
					end: '2020-08-25',
					className: 'fc-bg-blue',
					icon : "camera"
				},
				{
					title: 'Go Space :)',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-12-27',
					end: '2020-12-27',
					className: 'fc-bg-default',
					icon : "rocket"
				},
				{
					title: 'Dentist',
					description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
					start: '2020-12-29T11:30:00',
					end: '2020-12-29T012:30:00',
					className: 'fc-bg-blue',
					icon : "medkit",
					allDay: false
				}
			],
			eventRender: function(event, element) {
				if(event.icon){
					element.find(".fc-title").prepend("<i class='fa fa-"+event.icon+"'></i>");
				}
			  },
			dayClick: function() {
				jQuery('#modal-view-event-add').modal();
			},
			eventClick: function(event, jsEvent, view) {
			        jQuery('.event-icon').html("<i class='fa fa-"+event.icon+"'></i>");
					jQuery('.event-title').html(event.title);
					jQuery('.event-body').html(event.description);
					jQuery('.eventUrl').attr('href',event.url);
					jQuery('#modal-view-event').modal();
			},
		})
	});
  
})(jQuery);






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
      document.querySelector('#work').onclick = function(){
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






/*ovo ispod je novonadodana funkcija*/

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function klikfja() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


