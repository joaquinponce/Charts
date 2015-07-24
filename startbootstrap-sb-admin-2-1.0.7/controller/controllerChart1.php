<?php
require_once '../model/modelChart1.php';

$getDataChart = new getDataChart();

$getDta = $getDataChart->getDataChart1();

include '../controller/viewShowChart1.php';


?>