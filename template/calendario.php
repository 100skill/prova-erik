<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../calend.css">
    
<!-- 
    <style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

</style> -->
    
    
    <title>Document</title>
    

    <!-- <script>

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
      events: 'lista_eventos.php'
    });

    calendar.render();
  });

    </script> -->
</head>

<body>
  <script src='../js/index.global.min.js'></script>
    <script src='../js/custom.js'></script>
    
    <script src='../js/core/locales-all.global.min.js'></script>

    <div id='calendar'></div>
    

    
    
</body>
<a href="list_func.php" class="btn btn-primary">Ver peças</a>

</html>