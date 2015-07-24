<?php 
foreach ( $getDta as $row ) {
	
	    /* echo ('hola');
		echo $row ['report_id'];
		echo $row ['jenkins_run_number'];
		echo $row ['job_name'];
		echo $row ['environment']; */
	
	//echo $row ['job_name'];
	}
	?>
	
<html>
  <head>
<script>

$(function () {
    $('#barchart_material3').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Live QA Reporting Chart'
        },
        subtitle: {
            text: 'Source: Reporting DB'
        },
        xAxis: {

        	<?php 
        	echo "categories: ['";
        	
        	foreach ( $getDta as $row ) {
        	echo $row ['run_date_time'];
        	echo "','";
			//echo $row ['run_date_time'];
			//echo "','";
			//echo $row ['run_date_time'];
        	}

        	echo "'],";
        	?>

            //categories: ['hola','hola2','hola3'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (milliseconds)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' milliseconds'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },

        series: [{
            name: '<?php echo $row ['job_name'];?>',
            data: [

                   <?php
                   
                   foreach ( $getDta as $row ) {
                   	
                   	echo  $row ['time_taken'];
                    echo ",";
                   }

                    ?>
                   ]
        }]
    });
});

</script>

	</head>
	
	<body>
	<div id="barchart_material3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	
	</body>
		
		
</html>
