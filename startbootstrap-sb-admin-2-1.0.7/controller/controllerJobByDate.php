<?php
require_once '../model/modelJobByDate.php';

$date=$_REQUEST['date'];

$getDataJob = new getJobDate();

$getJobDetails = $getDataJob->getjob($date);

foreach ( $getJobDetails as $row ) {
	//echo $row ['report_id'];
}

//echo $row ['report_id'];

$reportNumber = $row ['report_id'];

echo ($reportNumber);


?>





