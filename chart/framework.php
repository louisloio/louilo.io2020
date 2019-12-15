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
      "value": "50",
      "category": [{
        "label": "Teaching",
        "color": "#90D9C5",
        "value": "70",
        "tooltext": "Teaching means that I'm able to animate workshop on this topic",
        "category": [{
          "label": "Bootstrap 4",
          "color": "#E9F8F3",
          "value": "1",
          "tooltext": "50% of my time to program I'm using Bootstrap 4"
        
        }]
      }, {
        "label": "Practicing",
        "color": "#9CCFDE",
        "value": "40",
        "tooltext": "Practicing means that I'm able to write and read on this topic",
        "category": [{
          "label": "React",
          "color": "#CEE7EE",
          "value": "15",
          "tooltext": "20% of my time to program I'm using React",

        }, {
          "label": "Vue",
          "color": "#CEE7EE",
          "value": "15",
          "tooltext": "20% of my time to program I'm using Vue"
          
        }]
      }, {
        "label": "Novice",
        "color": "#DDE09F",
        "value": "10",
        "tooltext": "Novice means that I'm able re-use elements on this topic",
        "category": [{
          "label": "Stencil",
          "color": "#F0F2D5",
          "value": "5",
          "tooltext": "5% of my time to program I'm using Stencil",

        }, {
          "label": "Angular",
          "color": "#F6F7E6",
          "value": "5",
          "tooltext": "5% of my time to program I'm using Angular"
          
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
