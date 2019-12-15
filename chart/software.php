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
        "color": "#36A083",
        "value": "100",
        "tooltext": "Teaching means that I'm able to animate workshop on this topic",
        "category": [{
          "label": "Adobe XD",
          "color": "#52CBAA",
          "value": "45",
          "tooltext": "45% of my time to design I use Adobe XD"
        }, {
          "label": "InVision",
          "color": "#A3E4D3",
          "value": "20",
          "tooltext": "20% of my time to design I use InVision"
          
        }, {
          "label": "Animate",
          "color": "#D1F1E9",
          "value": "10",
          "tooltext": "10% of my time to design I use Animate"
          
        }, {
          "label": "Sketch",
          "color": "#E1F7F1",
          "value": "5",
          "tooltext": "5% of my time to design I use Sketch "
          
        }, {
          "label": "Photoshop",
          "color": "#D7EDF2",
          "value": "5",
          "tooltext": "5% of my time to design I use Photoshop "
          
        }, {
          "label": "InDesign",
          "color": "#E3F2F6",
          "value": "5",
          "tooltext": "5% of my time to design I use InDesign "
          
        }, {
          "label": "Illustrator",
          "color": "#EBF6F8",
          "value": "5",
          "tooltext": "5% of my time to design I use Illustrator "
          
        }, {
          "label": "Premiere",
          "color": "#F3FAFC",
          "value": "5",
          "tooltext": "5% of my time to design I use Premiere "
          
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
