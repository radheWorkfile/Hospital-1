document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("appointmentsCal");
  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: "prevYear,prev,next,nextYear today",
      center: "title",
      right: "dayGridMonth,dayGridWeek,dayGridDay",
    },
    initialDate: "2024-05-10",
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: [
      {
        title: "5 Appointments",
        url: "appointments-list.html",
        start: "2024-05-01",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "9 Appointments",
        url: "appointments-list.html",
        start: "2024-05-02",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "12 Appointments",
        url: "appointments-list.html",
        start: "2024-05-03",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "9 Appointments",
        url: "appointments-list.html",
        start: "2024-05-04",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "7 Appointments",
        url: "appointments-list.html",
        start: "2024-05-05",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "16 Appointments",
        url: "appointments-list.html",
        start: "2024-05-06",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "9 Appointments",
        url: "appointments-list.html",
        start: "2024-05-07",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "13 Appointments",
        url: "appointments-list.html",
        start: "2024-05-08",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "20 Appointments",
        url: "appointments-list.html",
        start: "2024-05-09",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "11 Appointments",
        url: "appointments-list.html",
        start: "2024-05-10",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "3 Appointments",
        url: "appointments-list.html",
        start: "2024-05-11",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#28A6A7"
      },
      {
        title: "6 Appointments",
        url: "appointments-list.html",
        start: "2024-05-12",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "18 Appointments",
        url: "appointments-list.html",
        start: "2024-05-13",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "4 Appointments",
        url: "appointments-list.html",
        start: "2024-05-14",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "5 Appointments",
        url: "appointments-list.html",
        start: "2024-05-15",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "5 Appointments",
        url: "appointments-list.html",
        start: "2024-05-16",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "9 Appointments",
        url: "appointments-list.html",
        start: "2024-05-17",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "12 Appointments",
        url: "appointments-list.html",
        start: "2024-05-18",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "9 Appointments",
        url: "appointments-list.html",
        start: "2024-05-19",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "7 Appointments",
        url: "appointments-list.html",
        start: "2024-05-20",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "16 Appointments",
        url: "appointments-list.html",
        start: "2024-05-21",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "9 Appointments",
        url: "appointments-list.html",
        start: "2024-05-22",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "13 Appointments",
        url: "appointments-list.html",
        start: "2024-05-23",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "20 Appointments",
        url: "appointments-list.html",
        start: "2024-05-24",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "11 Appointments",
        url: "appointments-list.html",
        start: "2024-05-25",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "3 Appointments",
        url: "appointments-list.html",
        start: "2024-05-26",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "6 Appointments",
        url: "appointments-list.html",
        start: "2024-05-27",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "18 Appointments",
        url: "appointments-list.html",
        start: "2024-05-28",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "4 Appointments",
        url: "appointments-list.html",
        start: "2024-05-29",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "5 Appointments",
        url: "appointments-list.html",
        start: "2024-05-30",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
      {
        title: "8 Appointments",
        url: "appointments-list.html",
        start: "2024-05-31",
        textColor: "#28A6A7",
        color: "#ffffff",
        borderColor: "#b2d5d3",
      },
    ],
  });

  calendar.render();
});
