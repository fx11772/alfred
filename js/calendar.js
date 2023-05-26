document.addEventListener('DOMContentLoaded', function() {
    const popupManager = new PopupManager();

    var dayButton = document.getElementById('dayButton');
    var weekButton = document.getElementById('weekButton');
    var monthButton = document.getElementById('monthButton');
    var yearButton = document.getElementById('yearButton');

    var viewDate = document.getElementById('viewDate');

    var backBtn = document.getElementById('backBtn');
    var nextBtn = document.getElementById('nextBtn');

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
        slotDuration: '00:15:00',
        firstDay: 1,
        selectable: true,
        selectMirror: true,
        nowIndicator: true,
        weekNumbers: true,
        weekText: "",

        select: function(info) {
            var startDate = moment(info.start).format('YYYY-MM-DD');
            var endDate = moment(info.end).format('YYYY-MM-DD');

            // Vérifiez si les dates de début et de fin sont dans la même semaine
            var isSameWeek = moment(info.start).isSame(info.end, 'week');
            if (isSameWeek) {
            endDate = moment(info.end).add(1, 'days').format('YYYY-MM-DD');
            }
        
            popupManager.openPopup(startDate, endDate);
        }
    });

    viewDate.innerHTML = calendar.getDate().toLocaleString('default', {
        month: 'long',
        year: 'numeric'
    });

    dayButton.addEventListener('click', function(){
        calendar.changeView('timeGridDay');
        viewDate.innerHTML = updateTitle(calendar.view);
    });

    weekButton.addEventListener('click', () => {
        calendar.changeView('timeGridWeek');
        viewDate.innerHTML = updateTitle(calendar.view);
    });

    monthButton.addEventListener('click', () => {
        calendar.changeView('dayGridMonth');
        viewDate.innerHTML = updateTitle(calendar.view);
    });

    yearButton.addEventListener('click', () => {
        calendar.changeView('multiMonthYear');
        viewDate.innerHTML = updateTitle(calendar.view);
    });

    backBtn.addEventListener('click', () => {
        calendar.prev();
        viewDate.innerHTML = updateTitle(calendar.view);
    });

    nextBtn.addEventListener('click', () => {
        calendar.next();
        viewDate.innerHTML = updateTitle(calendar.view);
    });

    calendar.render();
  });

  function updateTitle(view) {
    var title = '';

    switch(view.type) {
        case "timeGridDay":
            title = view.currentEnd.toLocaleString('default', {
                weekday: 'short',
                month: 'long',
                day: 'numeric',
                year: 'numeric',
                timeZone: 'America/Toronto'
      });
            break;
        case 'timeGridWeek':
            var start = view.currentStart.toLocaleString('default', {
                weekday: 'short',
                day: 'numeric'
            });
              var end = view.currentEnd.toLocaleString('default', {
                weekday: 'short',
                day: 'numeric'
            });
            title = `${start} - ${end}`;
            break;
        case 'dayGridMonth':
            title = view.currentEnd.toLocaleString('default', {
                month: 'long',
                year: 'numeric'
            });
            break;
        case 'multiMonthYear':
            title = view.currentEnd.toLocaleString('default', {
                year: 'numeric'
            });
            break;
    }
    return title;
  }