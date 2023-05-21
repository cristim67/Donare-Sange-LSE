<!DOCTYPE html>

<?php require_once "controllerUserData.php"; ?>

<?php require_once "request.php"; ?>

<?php require_once "email_re.php";
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/paginacalendar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

 <script>
        
        $(document).ready(function () {
            
    var calendar =  $("#calendar").fullCalendar({
    height: 450,
    defaultDate: "2023-03-30 08:00:00",
    editable: true,
    slotDuration: "00:15:00",
    slotLabelInterval: "00:15:00",
    defaultView: "agendaDay",
    header: {
      right: "",
      // left: '',
      center: "",
    },
    allDaySlot: false,
    events: "load_1.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

  select: function(start, end)
    {
     var title = '<?php echo $_SESSION["email"];?>';
     

    
     
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      var _calendar=1;
     

      
      $.ajax({
      url:"insert.php",
      type:"POST",
      data:{title:title, start:start, end:end, calendar:_calendar},
      });
     let person = location.reload();
     }
    },
    editable:true,

    eventClick:function(event)
    {
     var title = '<?php echo $_SESSION["email"];?>';
                if (title==event.title)
                
     {
        
      var id = event.id;
      $.ajax({
      url:"delete.php",
      type:"POST",
      data:{id:id},
      success:function()
      {
        calendar.fullCalendar('refetchEvents');
        alert("Programare stearsa");
      }
      })
     }
    },

  });
  });

$(document).ready(function () {
          
    var calendar =  $("#calendar1").fullCalendar({
    aspectRatio: 2,
    height: 450,
    defaultDate: "2023-03-30 08:00:00",
    editable: true,
    slotDuration: "00:15:00",
    slotLabelInterval: "00:15:00",
    defaultView: "agendaDay",
    header: {
      right: "",
      // left: '',
      center: "",
    },
    allDaySlot: false,
    events: "load_2.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 2;

        $.ajax({
          url: "insert.php",
          type: "POST",
          data: { title: title, start: start, end: end, calendar: _calendar },
        });
        let person = location.reload();
      }
    },
    editable: true,
    eventClick: function (event) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title == event.title) {
        var id = event.id;
        $.ajax({
          url: "delete.php",
          type: "POST",
          data: { id: id },
          success: function () {
            calendar.fullCalendar("refetchEvents");
            alert("Programare stearsa");
          },
        });
      }
    },
  });
});

$(document).ready(function () {
           
    var calendar = $("#calendar2").fullCalendar({
    aspectRatio: 2,
    height: 450,
    defaultDate: "2023-03-30 08:00:00",
    editable: true,
    slotDuration: "00:15:00",
    slotLabelInterval: "00:15:00",
    defaultView: "agendaDay",
    header: {
      right: "",
      // left: '',
      center: "",
    },
    allDaySlot: false,
    events: "load_3.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 3;

        $.ajax({
          url: "insert.php",
          type: "POST",
          data: { title: title, start: start, end: end, calendar: _calendar },
        });
        let person = location.reload();
      }
    },
    editable: true,
    eventClick: function (event) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title == event.title) {
        var id = event.id;
        $.ajax({
          url: "delete.php",
          type: "POST",
          data: { id: id },
          success: function () {
            calendar.fullCalendar("refetchEvents");
            alert("Programare stearsa");
          },
        });
      }
    },
  });
});

$(document).ready(function () {
          
    var calendar =  $("#calendar3").fullCalendar({
    aspectRatio: 2,
    height: 450,
    defaultDate: "2023-03-30 08:00:00",
    editable: true,
    slotDuration: "00:15:00",
    slotLabelInterval: "00:15:00",
    defaultView: "agendaDay",
    header: {
      right: "",
      // left: '',
      center: "",
    },
    allDaySlot: false,
    events: "load_4.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 4;

        $.ajax({
          url: "insert.php",
          type: "POST",
          data: { title: title, start: start, end: end, calendar: _calendar },
        });
        let person = location.reload();
      }
    },
    editable: true,
    eventClick: function (event) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title == event.title) {
        var id = event.id;
        $.ajax({
          url: "delete.php",
          type: "POST",
          data: { id: id },
          success: function () {
            calendar.fullCalendar("refetchEvents");
            alert("Programare stearsa");
          },
        });
      }
    },
  });
});

$(document).ready(function () {
          
    var calendar =  $("#calendar4").fullCalendar({
    height: 450,
    defaultDate: "2023-03-30 08:00:00",
    editable: true,
    slotDuration: "00:15:00",
    slotLabelInterval: "00:15:00",
    defaultView: "agendaDay",
    header: {
      right: "",
      // left: '',
      center: "",
    },
    allDaySlot: false,
    events: "load_5.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 5;

        $.ajax({
          url: "insert.php",
          type: "POST",
          data: { title: title, start: start, end: end, calendar: _calendar },
        });
        let person = location.reload();
      }
    },
    editable: true,
    eventClick: function (event) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title == event.title) {
        var id = event.id;
        $.ajax({
          url: "delete.php",
          type: "POST",
          data: { id: id },
          success: function () {
            calendar.fullCalendar("refetchEvents");
            alert("Programare stearsa");
          },
        });
      }
    },
  });
});

$(document).ready(function () {
           
    var calendar = $("#calendar5").fullCalendar({
    height: 450,
    defaultDate: "2023-03-30 08:00:00",
    editable: true,
    slotDuration: "00:15:00",
    slotLabelInterval: "00:15:00",
    defaultView: "agendaDay",
    header: {
      right: "",
      // left: '',
      center: "",
    },
    allDaySlot: false,
    events: "load_6.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 6;

        $.ajax({
          url: "insert.php",
          type: "POST",
          data: { title: title, start: start, end: end, calendar: _calendar },
        });
        let person = location.reload();
      }
    },
    editable: true,
    eventClick: function (event) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title == event.title) {
        var id = event.id;
        $.ajax({
          url: "delete.php",
          type: "POST",
          data: { id: id },
          success: function () {
            calendar.fullCalendar("refetchEvents");
            alert("Programare stearsa");
          },
        });
      }
    },
  });
});

$(document).ready(function () {
           
    var calendar = $("#calendar6").fullCalendar({
    height: 450,
    defaultDate: "2023-03-30 08:00:00",
    editable: true,
    slotDuration: "00:15:00",
    slotLabelInterval: "00:15:00",
    defaultView: "agendaDay",
    header: {
      right: "",
      // left: '',
      center: "",
    },
    allDaySlot: false,
    events: "load_7.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 7;

        $.ajax({
          url: "insert.php",
          type: "POST",
          data: { title: title, start: start, end: end, calendar: _calendar },
        });
        let person = location.reload();
      }
    },
    editable: true,
    eventClick: function (event) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title == event.title) {
        var id = event.id;
        $.ajax({
          url: "delete.php",
          type: "POST",
          data: { id: id },
          success: function () {
            calendar.fullCalendar("refetchEvents");
            alert("Programare stearsa");
          },
        });
      }
    },
  });
});

         
        
    </script>  
        

<body>
   
        
        
        
        
        
     
    <div class="container">
        <div class="navbar">
            <div class="button-back">
                <button onclick="location.href='/index.php'" class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <!-- <span class="button-text">Acasa</span> -->
                </button>
            </div>
            <div class="title">
                <span class="colorat">Donare </span>
                <span class="nocolor">LSE </span>
                <span class="colorat">Sange</span>
            </div>
        </div>
        <div class="calendare">
            <div class="sus">
                <div class="C">
                    <div class="text">Pat donare 1</div>
                    <div id="calendar"></div>
                </div>
                <div class="C">
                    <div class="text">Pat donare 2</div>
                    <div id="calendar1"></div>
                </div>
            </div>

            <div class="jos">
                <div class="C">
                    <div class="text">Pat donare 3</div>
                    <div id="calendar2"></div>
                </div>

                <div class="C">
                    <div class="text">Pat donare 4</div>
                    <div id="calendar3"></div>
                </div>
            </div>

            <div class="jos">
                <div class="C">
                    <div class="text">Pat donare 5</div>
                    <div id="calendar4"></div>
                </div>

                <div class="C">
                    <div class="text">Pat donare 6</div>
                    <div id="calendar5"></div>
                </div>
            </div>

            <div class="jos">
                <div class="C">
                    <div class="text">Pat donare 7</div>
                    <div id="calendar6"></div>
                </div>
            </div>
        </div>
    </div>

</body>




</html>