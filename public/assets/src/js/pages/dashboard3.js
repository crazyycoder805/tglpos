$(function () {
    "use strict";

    var options1 = {
          series: [{
          data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
          chart: {
          type: 'line',
          width: 100,
          height: 70,
          sparkline: {
            enabled: true
          }
        },    
        stroke: {
          curve: 'smooth',
      width: 2,
        },
    colors:['#51ce8a'],
        tooltip: {
          fixed: {
            enabled: false
          },
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return ''
              }
            }
          },
          marker: {
            show: false
          }
        }
        };

        var chart1 = new ApexCharts(document.querySelector("#new-leads-chart"), options1);
        chart1.render();    

var options1 = {
          series: [{
          data: [25, 40, 80, 50, 30, 50, 22, 24, 78, 19, 20]
        }],
          chart: {
          type: 'line',
          width: 100,
          height: 70,
          sparkline: {
            enabled: true
          }
        },      
        stroke: {
          curve: 'smooth',
            width: 2,
        },
        colors:['#f2426d'],
        tooltip: {
          fixed: {
            enabled: false
          },
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return ''
              }
            }
          },
          marker: {
            show: false
          }
        }
        };

        var chart1 = new ApexCharts(document.querySelector("#new-leads-chart2"), options1);
        chart1.render();

        var options1 = {
          series: [{
          data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
          chart: {
          type: 'line',
          width: 100,
          height: 70,
          sparkline: {
            enabled: true
          }
        },      
        stroke: {
          curve: 'smooth',
            width: 2,
        },
        colors:['#209dff'],
        tooltip: {
          fixed: {
            enabled: false
          },
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return ''
              }
            }
          },
          marker: {
            show: false
          }
        }
        };

        var chart1 = new ApexCharts(document.querySelector("#new-leads-chart3"), options1);
        chart1.render();


        var options1 = {
          series: [{
          data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
          chart: {
          type: 'line',
          width: 100,
          height: 70,
          sparkline: {
            enabled: true
          }
        },      
        stroke: {
          curve: 'smooth',
            width: 2,
        },
        colors:['#ff9920'],
        tooltip: {
          fixed: {
            enabled: false
          },
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return ''
              }
            }
          },
          marker: {
            show: false
          }
        }
        };

        var chart1 = new ApexCharts(document.querySelector("#new-leads-chart4"), options1);
        chart1.render();




          var options = {
          series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
          chart: {
          height: 150,
          type: 'area',
      toolbar: {
          show: false,
      },
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth',
      width: 2,
        },
    colors: ['#46bc5c'],
        grid: {
          strokeDashArray: 5,
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
      labels: {
              show: false,
      },
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false,
        },
        },
    tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " %"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#investment-chart"), options);
        chart.render();
  

  var options = {
          series: [44, 55, 41],
      labels: ['Large Cap Funds', 'Diversified Funds', 'Debt Funds'],
          chart: {
          type: 'donut',
        width: 180,
        },
    colors: ['#0d6efd', '#209dff', '#198754'],
    legend: {
      show: false,
    },
    plotOptions: {
      pie: { 
      donut: {
        size: '30%',
      },
      },
    },
    dataLabels: {
        enabled: false,
    },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#portfolio-chart"), options);
        chart.render();


  });


// slimScroll-------------------------------------------------
window.onload = function() {
  // Cache DOM Element
  var scrollable = $('.scrollable');
  
  // Keeping the Scrollable state separate
  var state = {
    pos: {
      lowest: 0,
      current: 0
    },
    offset: {
      top: [0, 0], //Old Offset, New Offset
    }
  }
  //
  scrollable.slimScroll({
    height: '284px',
    width: '',
    start: 'top'
  });
  //
  scrollable.slimScroll().bind('slimscrolling', function (e, pos) {
    // Update the Scroll Position and Offset
    
    // Highest Position
    state.pos.highest = pos !== state.pos.highest ?
      pos > state.pos.highest ? pos : state.pos.highest
    : state.pos.highest;
    
    // Update Offset State
    state.offset.top.push(pos - state.pos.lowest);
    state.offset.top.shift();
    
    if (state.offset.top[0] < state.offset.top[1]) {
      console.log('...Scrolling Down')
      // ... YOUR CODE ...
    } else if (state.offset.top[1] < state.offset.top[0]) {
      console.log('Scrolling Up...')
      // ... YOUR CODE ...
    } else {
      console.log('Not Scrolling')
      // ... YOUR CODE ...
    }
  });
};


// slimScroll------------------------------------------------- End

document.addEventListener("DOMContentLoaded", function() {
    // Area chart
    var options = {
        chart: {
            height: 388,
            type: "area",
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: "straight",
            width: 2,
        },
        series: [{
            name: "",
            data: [0, 50, 30, 60, 70, 20, 80]
        }],
        colors: ["#0052cc"],
        xaxis: {
            categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat",
                "Sun"
            ],
        },
        tooltip: {
          boolbar:{
            show:false,
          },
            x: {
                format: "dd/MM/yy HH:mm"
            },
        }
    }
    var chart = new ApexCharts(
        document.querySelector("#apexcharts-area"),
        options
    );
    chart.render();
});




var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  series: [
    {
      type: 'gauge',
      startAngle: 180,
      endAngle: 0,
      center: ['50%', '75%'],
      radius: '98%',
      min: 0,
      max: 1,
      splitNumber: 8,
      axisLine: {
        lineStyle: {
          width: 6,
          color: [
            [0.25, ' #7CFFB2'],
            [0.5, '#FDDD60'],
            [0.75, '#58D9F9'],
            [1, '#FF6E76']
          ]
        }
      },
      pointer: {
        icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
        length: '12%',
        width: 20,
        offsetCenter: [0, '-60%'],
        itemStyle: {
          color: 'auto'
        }
      },
      axisTick: {
        length: 12,
        lineStyle: {
          color: 'auto',
          width: 2
        }
      },
      splitLine: {
        length: 20,
        lineStyle: {
          color: 'auto',
          width: 5
        }
      },
      axisLabel: {
        color: '#464646',
        fontSize: 14,
        distance: -40,
        rotate: 'tangential',
        formatter: function (value) {
          if (value === 0.875) {
            return 'Very High';
          } else if (value === 0.625) {
            return 'High';
          } else if (value === 0.375) {
            return 'Moderate';
          } else if (value === 0.125) {
            return 'Low';
          }
          return '';
        }
      },
      title: {
        offsetCenter: [0, '-10%'],
        fontSize: 20
      },
      detail: {
        fontSize: 30,
        offsetCenter: [0, '-0%'],
        valueAnimation: true,
        formatter: function (value) {
          return Math.round(value * 100) + '';
        },
        color: 'inherit'
      },
      data: [
        {
          value: 0.9,
          name: ''
        }
      ]
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);