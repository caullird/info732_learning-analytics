$(function() {

	var todayDate = moment().startOf('day');
	var YM = todayDate.format('YYYY-MM');
	var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
	var TODAY = todayDate.format('YYYY-MM-DD');
	var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay,listWeek'
		},
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		navLinks: true,
		backgroundColor: '#1f2e86',   
		eventTextColor: '#1f2e86',
		textColor: '#378006',
		dayClick: function(date, jsEvent, view) {

        alert('Clicked on: ' + date.format());

        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

        alert('Current view: ' + view.name);

        // change the day's background color just for fun
        $(this).css('background-color', 'red');

    },
		events: [
			{
				title: 'Hackathon Sopra',
				start: YM + '-12',
				color: '#006DF0'
			},
			{
				title: 'PROJ 731',
				start: YM + '-14',
				end: YM + '-18',
				color: '#933EC5'
			},
			{
				id: 999,
				title: 'MATH 741',
				start: YM + '-13T16:00:00',
				color: '#0D4CFF'
			},
			{
				id: 999,
				title: 'INFO 734',
				start: YM + '-24T16:00:00',
				color: '#65b12d'
			},
			{
				title: 'PROJ 732',
				start: YM + '-03',
				end: YM + '-05',
				color: '#f3c30b'
			},
			{
				title: 'DATA 732',
				start: TODAY + 'T10:30:00',
				end: TODAY + 'T12:30:00',
				color: '#1f2e86'
			},
			{
				title: 'Déjeuner',
				start: TODAY + 'T12:00:00',
				color: '#FF5722'
			},
			{
				title: 'ISOC 731',
				start: YESTERDAY + 'T14:30:00',
				color: '#1f2e86'
			},
			{
				title: 'Happy Hour',
				start: TODAY + 'T17:30:00',
				color: '#AA00FF'
			},
			{
				title: 'Restaurant',
				start: YM + '-18',
				color: '#00BCD4'
			},
			{
				title: 'INFO 731',
				start: YM + '-27T07:00:00',
				color: '#D80027'
			},
			{
				title: 'Réunion Polycrew',
				url: 'http://polycrew.fr/',
				start: YM + '-28',
				color: '#323232'
			}
		]
	});
});