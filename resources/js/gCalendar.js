/* Script that sets up google Calendar for various sites. */

/* loaded after $(document).ready()
*  init() called from the page that contains the calendar
*/
    var googleCalendarApiKey = 'AIzaSyCYO4ZUyfv1YA4q2n9Hi3LaPpr7gLlYlHs';
    var eid = 'NzB2bWJpN201b3RzYWx2NG45OHJnZzhkYXMgaTNyMWo1b2YzNjMzc2hvazFnMXVzOWc3MDhAZw';
    
	var nhActivities = '';
	var pcActivities = 'i3r1j5of3633shok1g1us9g708@group.calendar.google.com';
	var pcMenu = '';

	
	var cal = $("#calendar");

function initGoogleCalendar(calendarID){
	
	var calendarName = '';
	
	switch(calendarID){
		case 2:
			calendarName = pcActivities;
			break;
		default:
			console.log("Undefined Google Calendar Name.");
			break;
	}
	
	//cal.parent().parent().removeClass("contentTile");
	cal.parent().parent().css("min-height","900px");
	
	cal.fullCalendar({
        googleCalendarApiKey: 'AIzaSyCYO4ZUyfv1YA4q2n9Hi3LaPpr7gLlYlHs',
        events: {
	        googleCalendarId: calendarName
        },
        eventClick: function(event) {
	        if (event.url) {        
	            return false;
	        }
    	}
    })

}

