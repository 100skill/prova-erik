document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      locale: 'pt-br',
      initialDate: '2024-05-13',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: "../_scripts/lista_events.php",
    });

    calendar.render();
  });