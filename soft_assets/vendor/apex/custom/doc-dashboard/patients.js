var options = {
  chart: {
    height: 300,
    type: "line",
    toolbar: {
      show: false,
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "smooth",
    width: 5,
  },
  series: [
    {
      name: "New Patients",
      data: [100, 400, 150, 400, 200, 350, 150, 300, 200, 450, 300, 560],
    },
    {
      name: "Return Patients",
      data: [80, 240, 200, 550, 300, 450, 280, 390, 290, 500, 490, 650],
    }
  ],
  grid: {
    borderColor: "#d8dee6",
    strokeDashArray: 5,
    xaxis: {
      lines: {
        show: true,
      },
    },
    yaxis: {
      lines: {
        show: false,
      },
    },
    padding: {
      top: 0,
      right: 0,
      bottom: 0,
      left: 0,
    },
  },
  xaxis: {
    categories: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
  },
  yaxis: {
    labels: {
      show: false,
    },
  },
  colors: ["#28A6A7", "#a7cfcd", "#d3e7e6", "#e9f3f2"],
  markers: {
    size: 0,
    opacity: 0.3,
    colors: ["#28A6A7", "#a7cfcd", "#d3e7e6", "#e9f3f2"],
    strokeColor: "#ffffff",
    strokeWidth: 1,
    hover: {
      size: 7,
    },
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val;
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#patients"), options);

chart.render();