$(document).ready(function () {
  $("#calendar").fullCalendar({
    height: 450,
    defaultDate: "2023-03-20 08:00:00",
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
    events: "load_0.php",
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
      var _calendar=0;
     

      
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
  $("#calendar1").fullCalendar({
    aspectRatio: 2,
    height: 450,
    defaultDate: "2023-03-20 08:00:00",
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
    events: "load_0.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 0;

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
  $("#calendar2").fullCalendar({
    aspectRatio: 2,
    height: 450,
    defaultDate: "2023-03-20 08:00:00",
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
    events: "load_0.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 0;

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
  $("#calendar3").fullCalendar({
    aspectRatio: 2,
    height: 450,
    defaultDate: "2023-03-20 08:00:00",
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
    events: "load_0.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 0;

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
  $("#calendar4").fullCalendar({
    height: 450,
    defaultDate: "2023-03-20 08:00:00",
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
    events: "load_0.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 0;

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
  $("#calendar5").fullCalendar({
    height: 450,
    defaultDate: "2023-03-20 08:00:00",
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
    events: "load_0.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 0;

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
  $("#calendar6").fullCalendar({
    height: 450,
    defaultDate: "2023-03-20 08:00:00",
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
    events: "load_0.php",
    selectable: true,

    selectHelper: true,

    minTime: "08:45:00",
    maxTime: "12:30:00",

    select: function (start, end) {
      var title = '<?php echo $_SESSION["email"];?>';
      if (title) {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var _calendar = 0;

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
