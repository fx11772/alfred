document.addEventListener('DOMContentLoaded', function() {
    var dayButton = document.getElementById('dayButton');
    var weekButton = document.getElementById('weekButton');
    var monthButton = document.getElementById('monthButton');
    var yearButton = document.getElementById('yearButton');

    var viewDate = document.getElementById('viewDate');

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            start: '',
            center: '',
            end: ''
        },
        initialView: 'dayGridMonth',
        monthMode: 'variable',
        fixedWeekCount: false,
        monthsPerRow: 3,
        timeZone: 'UTC',
        allDaySlot: false,
        slotDuration: '00:15:00'
    });

    viewDate.innerHTML = calendar.getDate().toLocaleString('default', {
        month: 'long',
        year: 'numeric'
    });

    dayButton.addEventListener('click', function(){
        calendar.changeView('timeGridDay');
    });

    weekButton.addEventListener('click', () => {
        calendar.changeView('timeGridWeek');
    });

    monthButton.addEventListener('click', () => {
        calendar.changeView('dayGridMonth');
    });

    yearButton.addEventListener('click', () => {
        calendar.changeView('multiMonthYear');
    })

    calendar.render();
  });