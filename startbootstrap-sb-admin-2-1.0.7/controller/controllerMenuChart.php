<?php
require_once '../model/modelMenuChart.php';

$getDataChart = new getData ();

$getDta = $getDataChart->getDatabyDay();

include '../controller/viewShowData.php';



?>