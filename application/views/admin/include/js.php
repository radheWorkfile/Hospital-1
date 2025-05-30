    <script src="<?php echo base_url();?>soft_assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>soft_assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>soft_assets/js/moment.min.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/overlay-scroll/custom-scrollbar.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/daterange/daterange.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/daterange/custom-daterange.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/apex/apexcharts.min.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/apex/custom/dentist/patients.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/apex/custom/dentist/appointments.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/apex/custom/dentist/income.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/apex/custom/dentist/earnings.js"></script>
    <script src="<?php echo base_url();?>soft_assets/vendor/apex/custom/dentist/claims.js"></script>
    <script src="<?php echo base_url();?>soft_assets/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


     <script>
        // Get initial time from PHP
        let timeParts = document.getElementById("clock").innerText.split(":");
        let hours = parseInt(timeParts[0]);
        let minutes = parseInt(timeParts[1]);
        let seconds = parseInt(timeParts[2]);

        function updateClock() {
            seconds++;
            if (seconds >= 60) {
                seconds = 0;
                minutes++;
                if (minutes >= 60) {
                    minutes = 0;
                    hours++;
                    if (hours >= 24) hours = 0;
                }
            }

            let hh = hours.toString().padStart(2, '0');
            let mm = minutes.toString().padStart(2, '0');
            let ss = seconds.toString().padStart(2, '0');
            document.getElementById("clock").innerText = `${hh}:${mm}:${ss}`;
        }

        setInterval(updateClock, 1000); // Update every second
    </script>

    <script>
const xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
const yValues = [55, 49, 44, 24, 15];
const barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
    </script>