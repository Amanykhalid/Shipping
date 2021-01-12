@include('dashboard.partition._head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 @include('dashboard.partition._nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('dashboard.partition._aside')
  <!-- Content Wrapper. Contains page content -->
 @yield('content')
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
 {{--  @include('dashboard.partition._footer')  --}}
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  <!-- Resources -->
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
  
  <!-- Chart code -->
  <script>
      am4core.ready(function() {
      
      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end
      
      var chart = am4core.create("chartdiv", am4charts.XYChart);
      chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
      
      chart.data = [

      {
          page: "user",
          visits: 5000
      },
      {
          page: "Slider",
          visits: 6000
      },
      {
          page: "Menus",
          visits: 7000
      },
      {
          page: "Pages",
          visits: 1122
      },
      {
          page: "Langouges",
          visits: 1114
      },
   
      ];
      
      var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
      categoryAxis.renderer.grid.template.location = 0;
      categoryAxis.dataFields.category = "page";
      categoryAxis.renderer.minGridDistance = 40;
      categoryAxis.fontSize = 11;
      
      var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
      valueAxis.min = 0;
      valueAxis.max = 24000;
      valueAxis.strictMinMax = true;
      valueAxis.renderer.minGridDistance = 30;
      // axis break
      var axisBreak = valueAxis.axisBreaks.create();
      axisBreak.startValue = 2100;
      axisBreak.endValue = 22900;
      //axisBreak.breakSize = 0.005;
      
      // fixed axis break
      var d = (axisBreak.endValue - axisBreak.startValue) / (valueAxis.max - valueAxis.min);
      axisBreak.breakSize = 0.05 * (1 - d) / d; // 0.05 means that the break will take 5% of the total value axis height
      
      // make break expand on hover
      var hoverState = axisBreak.states.create("hover");
      hoverState.properties.breakSize = 1;
      hoverState.properties.opacity = 0.1;
      hoverState.transitionDuration = 1500;
      
      axisBreak.defaultState.transitionDuration = 1000;
      /*
      // this is exactly the same, but with events
      axisBreak.events.on("over", function() {
      axisBreak.animate(
          [{ property: "breakSize", to: 1 }, { property: "opacity", to: 0.1 }],
          1500,
          am4core.ease.sinOut
      );
      });
      axisBreak.events.on("out", function() {
      axisBreak.animate(
          [{ property: "breakSize", to: 0.005 }, { property: "opacity", to: 1 }],
          1000,
          am4core.ease.quadOut
      );
      });*/
      
      var series = chart.series.push(new am4charts.ColumnSeries());
      series.dataFields.categoryX = "page";
      series.dataFields.valueY = "visits";
      series.columns.template.tooltipText = "{valueY.value}";
      series.columns.template.tooltipY = 0;
      series.columns.template.strokeOpacity = 0;
      
      // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
      series.columns.template.adapter.add("fill", function(fill, target) {
      return chart.colors.getIndex(target.dataItem.index);
      });
      
      }); // end am4core.ready()
  </script>
   
   <!-- Chart code -->
   <script>
      am4core.ready(function() {
      
      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end
      
      var chart = am4core.create("chartdiv2", am4charts.XYChart);
      
      var data = [];
      var value = 50;
      for(var i = 0; i < 300; i++){
        var date = new Date();
        date.setHours(0,0,0,0);
        date.setDate(i);
        value -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
        data.push({date:date, value: value});
      }
      
      chart.data = data;
      
      // Create axes
      var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
      dateAxis.renderer.minGridDistance = 60;
      
      var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
      
      // Create series
      var series = chart.series.push(new am4charts.LineSeries());
      series.dataFields.valueY = "value";
      series.dataFields.dateX = "date";
      series.tooltipText = "{value}"
      
      series.tooltip.pointerOrientation = "vertical";
      
      chart.cursor = new am4charts.XYCursor();
      chart.cursor.snapToSeries = series;
      chart.cursor.xAxis = dateAxis;
      
      //chart.scrollbarY = new am4core.Scrollbar();
      chart.scrollbarX = new am4core.Scrollbar();
      
      }); // end am4core.ready()
   </script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


   <script>
       var ctx = document.getElementById('myChart').getContext('2d');
       var myChart = new Chart(ctx, {
           type: 'polarArea',
           data: {
               labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
               datasets: [{
                   label: '# of Votes',
                   data: [1, 6, 3, 5, 12, 3],
                   backgroundColor: [
                       'rgba(255, 99, 132, 0.2)',
                       'rgba(54, 162, 235, 0.2)',
                       'rgba(255, 206, 86, 0.2)',
                       'rgba(75, 192, 192, 0.2)',
                       'rgba(153, 102, 255, 0.2)',
                       'rgba(255, 159, 64, 0.2)'
                   ],
                   borderColor: [
                       'rgba(255, 99, 132, 1)',
                       'rgba(54, 162, 235, 1)',
                       'rgba(255, 206, 86, 1)',
                       'rgba(75, 192, 192, 1)',
                       'rgba(153, 102, 255, 1)',
                       'rgba(255, 159, 64, 1)'
                   ],
                   borderWidth: 1
               }]
           },
           options: {
               scales: {
                tooltips: {
                      mode: 'point'
                  },
                   yAxes: [{
                       ticks: {
                           beginAtZero: true
                       }
                   }]
               }
           }
       });
   </script>

    <script>
      var ctx = document.getElementById('myChart3').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
              datasets: [{
                  data: [20, 50, 100, 75, 25, 0],
                  label: 'Left dataset',
                  backgroundColor: '#f00',
                  // This binds the dataset to the left y axis
                  yAxisID: 'left-y-axis'
              }, {
                  data: [0.1, 0.5, 1.0, 2.0, 1.5, 0],
                  label: 'Right dataset',
                  backgroundColor: '#12322',
                  // This binds the dataset to the right y axis
                  yAxisID: 'right-y-axis'
                  
              }],
              labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
          },
          options: {
              scales: {
                  yAxes: [{
                      id: 'left-y-axis',
                      type: 'linear',
                      position: 'left'
                  }, {
                      id: 'right-y-axis',
                      type: 'linear',
                      position: 'right'
                  }]
              }
          }
      });
  </script>
</body>
@include('dashboard.partition._script')
