<?php
require_once '../model/modelJobByDate.php';

$reportNumber=$_REQUEST['repId'];

$getData = new getJobDate();

$getDetails = $getData->getExecutionDetailsByJob($reportNumber);

/*foreach ( $getDetails as $row ) {

		echo $row ['testcase_id'];
		echo $row ['rep_id'];
		echo $row ['testcase_name'];
		echo $row ['count']; 
		echo $row ['status'];
}*/

include '../controller/viewChartByDate.php';


?>



