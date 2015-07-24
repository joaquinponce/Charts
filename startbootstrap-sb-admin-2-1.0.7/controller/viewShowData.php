<?php
if ($getDta) {
	
	echo '<div class="row" >';
	echo '<div class="col-lg-13">';
	echo '<div class="col-lg-13">';
	echo '<div class="table-responsive">';
	echo '<table class="table table-bordered table-hover table-striped">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>#</th>';
	echo '<th>Jenkins #</th>';
	echo '<th>Job Name</th>';
	echo '<th>Environment</th>';
	echo '<th>Test Group</th>';
	echo '<th>Run Date</th>';
	echo '<th>Time Taken</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	
	foreach ( $getDta as $row ) {
		
		echo '<tr>';
		echo '<td>' . $row ['report_id'];
		'</td>';
		echo '<td>' . $row ['jenkins_run_number'];
		'</td>';
		echo '<td>' . $row ['job_name'];
		'</td>';
		echo '<td>' . $row ['environment'];
		'</td>';
		echo '<td>' . $row ['environment'];
		'</td>';
		echo '<td>' . $row ['run_date_time'];
		'</td>';
		echo '<td>' . $row ['time_taken'];
		'</td>';
		echo '</tr>';
	}
	
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	
	/*
	 * echo json_encode ( array (
	 * 'wineDetails' => $getDta
	 * ) );
	 */
} else {
	
	echo 'Error: No data.';
}

?>