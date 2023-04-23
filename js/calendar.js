document.addEventListener('DOMContentLoaded', function() {
    var dayButton = document.getElementById('dayButton');
    var weekButton = document.getElementById('weekButton');
    var monthButton = document.getElementById('monthButton');
    var yearButton = document.getElementById('yearButton');
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      header: false
    });

    dayButton.addEventListener('click', function(){
        calendar.changeView('dayGridDay');
    });

    weekButton.addEventListener('click', () => {
        calendar.changeView('dayGridWeek');
    });

    monthButton.addEventListener('click', () => {
        calendar.changeView('dayGridMonth');
    });

    yearButton.addEventListener('click', () => {
        calendar.changeView('dayGridYear');
    })

    calendar.render();
  });