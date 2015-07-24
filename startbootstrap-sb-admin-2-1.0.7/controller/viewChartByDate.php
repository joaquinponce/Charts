<?php
foreach ( $getDetails as $row ) {
	
	/*echo $row ['testcase_id'];
	echo $row ['rep_id'];
	echo $row ['testcase_name'];
	echo $row ['count'];
	echo $row ['status'];*/
}

//echo 'hola';
?>

<html>

        <head>
        
        <script type="text/javascript">

        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '<b>Test Case Result Chart:</b> By Date   <b>Report Id:</b> 2'
                },
                xAxis: {
                    categories: ['Passed and Failed']
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Test Case %'
                    }
                },
                tooltip: {
                    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
                    shared: true
                },
                plotOptions: {
                    column: {
                        stacking: 'percent'
                    }
                },
                series: [{
                    name: 'Pass',
                    data: [5]
                }, {
                    name: 'Fail',
                    data: [2]
                }]
            });
        });
        
        </script>

    </head>

             <body>
             
             <div id="container" style="min-width: 300px; height: 380px; margin: 0 auto"></div>

          </body>

     <footer> 
     
         </footer>

</html>