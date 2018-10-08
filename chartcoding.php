<!DOCTYPE html>
<html>
<head>
<title>Charts</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>   
<!-- <script type="text/javascript" src="chartjs.js"></script> -->
<style type="text/css">
#chartdiv1
{
  width: 100%;
  height: 100%;
  position: absolute;
  text-decoration: none;
  color: rgb(0, 0, 0);
  font-family: Verdana;
  font-size: 11px;
  opacity: 0.7;
  display: none !important;
  left: 5px;
  top: 5px;
  border: 2px solid black;    
}
</style>	
</head>
<body>
<div class="col-lg-6 col-xs-12 col-sm-12">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-share font-red-sunglo hide"></i>
                      <span class="caption-subject font-dark bold uppercase">BAR CHART</span>         
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <div id="chartdiv1" class="display-none" style="display: block;">                     
                    </div>                  
                  </div>
                </div>                
</div>

<script type="text/javascript">
 $(document).ready(function(){
  $.ajax({
     dataType: "json",
     url: "data.php",
     method: "GET",
     success: dataserials
    });
});
    
 function dataserials(data){ 
  debugger
   console.log(data);     
var chart = AmCharts.makeChart("chartdiv1", {
    "theme": "light",
    "type": "serial",
    "titles": [ {
    "text": "",
    "size": 16
  } ],

    "dataProvider":data,
    "valueAxes": [{
        "stackType": "3d",
        "unit": "%",
        "position": "left",
        "title": "",
    }],
    "startDuration": 1,
    "graphs": [{
        "balloonText": " [[category]]: <b>[[value]]</b>",
        "fillAlphas": 0.9,
        "lineAlpha": 0.2,
        "title": "",
        "type": "",
        "valueField": "y"
    
    }],
    "plotAreaFillAlphas": 0.1,
    "depth3D": 20,
    "angle": 30,
    "categoryField": "firstname",
    "categoryAxis": {
        "gridPosition": "start"
    },
}); 
    jQuery('.chart-input').off().on('input change',function() {
  var property  = jQuery(this).data('property');
  var target    = chart;
  chart.startDuration = 0;

  if ( property == 'topRadius') {
    target = chart.graphs[0];
        if ( this.value == 0 ) {
          this.value = undefined;
        }
  }

  target[property] = this.value;
  chart.validateNow();
}); 
}    
</script>
</body>
</html>