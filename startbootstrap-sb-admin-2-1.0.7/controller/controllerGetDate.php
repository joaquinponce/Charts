<?php
require_once '../model/modelGetDate.php';

$getDat = new getDates();

$allDates = $getDat->getAllDates();

echo '<select id="chooDate">';

foreach ( $allDates as $row ) {
	      
	      echo '<option value="';
	      		$id = $row->run_date_time;
	      echo  $id;
	      echo	'">';
	      $id = $row->run_date_time;
	      echo  $id;
	      echo '</option>';
	} 
	echo '</select>';
	echo '  ';
	echo '<button type="button" onclick="setdates()">Generate Chart</button>';

?> 