<!DOCTYPE html>
<html>
<head>
<title>Charts</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>   
<!-- <script type="text/javascript" src="chartjs.js"></script> -->
<style type="text/css">
#chart-container 
{
	width: 50%;
	height: 50%;
}
#chartdiv1
{
  width: 100%;
  height: 100%;
}
</style>	
</head>
<body>
<div class="row">
<div id="chart-container">
      <canvas id="mycanvas"></canvas>
</div>
</div>
<div class="col-lg-6 col-xs-12 col-sm-12">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-bar-chart font-dark hide"></i>
                      <span class="caption-subject font-dark bold uppercase">HIGH CHART</span>   
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
    dataType:"json",
    url:"data.php",
    method: "GET",
    success: data
    });

  $.ajax({
     dataType: "json",
     url: "data.php",
     method: "GET",
     success: datadiagram
    });
});
    function data(data){
      console.log(data);
 
      var firstname=[];
      var lastname=[];

      for(var i in data)
      {
              firstname.push(data[i].firstname);
              lastname.push(data[i].y);
      }

      var chartdata = {
        labels: firstname,
        datasets : [
          {
            label: 'lastname',
            backgroundColor: 'rgb(43, 191, 255)',
            borderColor: 'rgb(43, 191, 255)',
            hoverBackgroundColor: 'rgb(43, 198, 12)',
            hoverBorderColor: 'rgb(43, 198, 12)',
            data: lastname
          }
        ]
      };

      var barGraph = new Chart(mycanvas, {
        type: 'bar',
        data: chartdata
      });
    }

    function datadiagram(data){
     console.log(data);
  var chartData=[];
for(i=0;i<data.length;i++)
     {
    chartData.push({"firstname":data[i].firstname,"y":parseInt(data[i].y)});
      } 
 Highcharts.chart('chartdiv1', {

  //  colors: ['#ADD8E6', '#E6ACD7', '#B2B2B2', '#D0D050', 'green', 'skyblue',
  //   '#FF9655', '#FFF263', '#6AF9C4'
  // ],     
 chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'   
    },
  credits:
  {
    enabled: false
  },

title: {
        text: 'Data in the form of highchart:'
    },
  
 tooltip: {
        enabled: false,
        split: false,
        pointFormat:'{point.firstname}:<b>{point.percentage:.1f}%</b>'
    },
plotOptions: {
        pie: {
            size:200,
            allowPointSelect: false,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b><span style="text-transform:capitalize;">{point.firstname}</span></b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name:'firstname',
        colorByPoint: true,
        data:chartData
    }]
});
}  
</script>
</body>
</html>