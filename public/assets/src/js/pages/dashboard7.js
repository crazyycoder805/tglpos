
$(function () {

  'use strict';
  
  $.fn.raty.defaults.path = 'https://bsinx-dashboard-template.multipurposethemes.com/bs5/images/rating/';

   // Default Score
    $('#score-rating').raty({
        score: 4
    });

     // Icon Range
    $('#icon-range').raty({
        iconRange: [
            { range: 1, on: 'wi wi-day-rain-wind font-size-18', off: 'wi wi-day-cloudy font-size-18' },
            { range: 2, on: 'wi wi-day-sleet font-size-18', off: 'wi wi-day-sleet-storm font-size-18' },
            { range: 3, on: 'wi wi-day-snow font-size-18', off: 'wi wi-day-storm-showers font-size-18' },
            { range: 4, on: 'wi wi-night-alt-snow font-size-18', off: 'wi wi-night-alt-thunderstorm font-size-18' },
            { range: 5, on: 'wi wi-night-snow-thunderstorm font-size-18', off: 'wi wi-night-snow-wind font-size-18' }
        ],
        starType: 'i'
    });



    var options = {
          series: [{
          name: 'Total Income',
          data: [44, 85, 60, 21, 71, 58, 45, 60, 38, 65, 40, 75 ]
        }],
          chart: {
          type: 'bar',
          height: 300,
      toolbar: {
          show: false,
      }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '30%',
            borderRadius: 3,
          },
        },
    colors:['#3596f7'],
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#income"), options);
        chart.render();
  
  
    
  
    var options = {
          series: [{
          name: 'Total Expense',
          data: [14, 45, 30, 1, 31, 28, 15, 30, 18, 25, 10, 25 ]
        }],
          chart: {
          type: 'bar',
          height: 300,
      toolbar: {
          show: false,
      }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '30%',
            borderRadius: 3,
          },
        },
    colors:['#ee3158'],
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#expense"), options);
        chart.render();
  
    
    var options = {
          series: [
          {
            name: "This Week",
            data: [435, 299, 339, 469, 392, 529, 339]
          },
          {
            name: "Last - Week",
            data: [312, 461, 314, 418, 317, 413, 513]
          }
        ],
          chart: {
          height: 300,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: '#000',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#3596f7', '#ee3158'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Set', 'Sun'],
        },
        legend: {
          position: 'top',
          horizontalAlign: 'center',
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#visitors"), options);
        chart.render();
  
    $('.product-div').slimScroll({
      height: '313px'
      });
  
  
    Morris.Donut({
        element: 'donut-chart',
      data: [{
        label: "Social Media",
        value: 825,

      }, {
        label: "Website",
        value: 345,
      }, {
        label: "stroke",
        value: 905,
      }],
      resize: true,
      colors:['#05825f', '#fc696a', '#0d6efd']
    });
  
  
     
    var optionDonut = {
      chart: {
        type: 'donut',
        width: '100%',
        height: 390
      },
      dataLabels: {
      enabled: false,
      },
      plotOptions: {
      pie: {
        customScale: 0.8,
        donut: {
        size: '85%',
        },
      },
      stroke: {
        colors: undefined
      }
      },
      colors:['#7047ee', '#05825f', '#ffa800', '#3596f7', '#ee3158' ],
      
      series: [21, 23, 19, 14, 6],
      labels: ['Clothing', 'Food Products', 'Electronics', 'Kitchen Utility', 'Gardening'],
            
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
      },
    }

    var donut = new ApexCharts(
      document.querySelector("#sales-chart"),
      optionDonut
    )
    donut.render();
  
    
  
  
    var options = {
          series: [{
            name: "Profit",
            data: [35, 41, 62, 42, 13, 18, 29]
          },
          {
            name: 'Sales',
            data: [87, 57, 74, 99, 75, 38, 62]
          }
        ],
          chart: {
          height: 240,
          type: 'line',
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false
          },
        },
        dataLabels: {
          enabled: false
        },
    colors:['#7047ee', '#ee3158' ],
        stroke: {
          width: [5, 2],
          curve: 'smooth',
          dashArray: [0, 5]
        },
        legend: {
      position: 'top',
      horizontalAlign: 'center',
    },
        xaxis: {
          categories: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan'],
        },
        tooltip: {
          y: [
            {
              title: {
                formatter: function (val) {
                  return val + "%"
                }
              }
            },
            {
              title: {
                formatter: function (val) {
                  return val + "%"
                }
              }
            }
          ]
        },

        responsive: [{
        breakpoint: 1367,
        options: {          
            chart: {
            height: 284,
          },
        },
      },
      ],

        };

        var chart = new ApexCharts(document.querySelector("#monthly-sales"), options);
        chart.render();




                var options = {
          series: [{
          name: 'series1',
          data: [100, 80, 90, 70, 80, 60, 110]
          },{
          name: 'series2',
          data: [50, 60, 40, 40, 45, 48, 70]
          },],
          chart: {
          height: 286,
          type: 'area',
          toolbar: {
            show: false,
            },
            offsetY: 0,
        },
        colors: ["#0d6efd", "#198754"],
        fill: {
          colors: ["#0d6efd","#198754" ],
          type: "gradient",
          gradient: {
            shade: "light",
            type: "vertical",
            shadeIntensity: 0.4,
            inverseColors: false,
            opacityFrom: 0.8,
            opacityTo: 0.1,
            stops: [0, 100],
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
        width: [2, 2],
          curve: 'smooth'
        },
        grid: {
          show: false,
          padding: {
            left: -10,
            top: -25,
            right: -0,
          },
        },
        markers: {
            size: 5,
        },
        xaxis: {
          type: 'datetime',
          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        legend: {
            show: false,
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          },
        },
        xaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart-widget1"), options);
        chart.render();
  
  
  
  
     
    var optionDonut = {
      chart: {
        type: 'donut',
        width: '100%',
        height: 300
      },
      dataLabels: {
      enabled: false,
      },
      plotOptions: {
      pie: {
        customScale: 0.8,
        donut: {
        size: '65%',
        },
      },
      },
      colors:['#6f57ea', '#ff7e6d', '#2ed4c7' ],
      
      series: [40, 24, 36],
      labels: ['Direct', 'Sponsored', 'Affiliate'],
            
      legend: {
        show: false
      },
    }

    var donut = new ApexCharts(
      document.querySelector("#profit-value"),
      optionDonut
    )
    donut.render();
    
  
}); // End of use strict