<!doctype html>
<html lang="en">
<head>
<?php include('head.php'); ?>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
</head>

<body>

<script type="text/javascript">//<![CDATA[

window.onload=function(){

FusionCharts.ready(function() {
var topProductsChart = new FusionCharts({
    type: 'multilevelpie',
  renderAt: 'chart-container',
  id: "myChart",
  width: '310',
  height: '310',
  dataFormat: 'json',
  dataSource: {
    "chart": {
      "caption": "",
      "subcaption": "",
      "showPlotBorder": "1",
      "piefillalpha": "60",
      "pieborderthickness": "2",
      "piebordercolor": "#FFFFFF",
      "hoverfillcolor": "#F1F2F2",
      "numberprefix": "h",
      "plottooltext": "",
      "theme": "fusion"
    },
    "category": [{
      "label": "",
      "color": "#ffffff",
      "value": "100",
      "category": [{
        "label": "Teaching",
        "color": "#90D9C5",
        "value": "70",
        "tooltext": "Teaching means that I'm able to animate workshop on this topic",
        "category": [{
          "label": "HTML",
          "color": "#E9F8F3",
          "value": "1",
          "tooltext": "35% of my time to program I'm creating HTML code "
        }, {
          "label": "CSS",
          "color": "#C8EBE2",
          "value": "1",
          "tooltext": "35% of my time to program I'm creating CSS code "
          
        }]
      }, {
        "label": "Practicing",
        "color": "#9CCFDE",
        "value": "20",
        "tooltext": "Practicing means that I'm able to write and read on this topic",
        "category": [{
          "label": "JS",
          "color": "#CEE7EE",
          "value": "1",
          "tooltext": "20% of my time to program I'm writting JS code "

        }]
      }, {
        "label": "Novice",
        "color": "#DDE09F",
        "value": "10",
        "tooltext": "Novice means that I'm able re-use elements on this topic",
        "category": [{
          "label": "PHP",
          "color": "#F0F2D5",
          "value": "2",
          "tooltext": "6% of my time to program I'm using PHP code",

        }, {
          "label": "SQL",
          "color": "#F6F7E6",
          "value": "1",
          "tooltext": "4% of my time to program I'm using SQL code"
          
        }]
      }]
    }]
    
  }
});
topProductsChart.render();
});


}

//]]>
</script>
<body>
  
    <div id="chart-container" style="width:310px; height:295px; overflow: hidden;"></div>

</div>

</body>

</html>
