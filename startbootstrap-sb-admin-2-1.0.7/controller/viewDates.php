<?php

if ($id) {
	
	echo '<div class="btn-group">';
	echo '<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">';
	echo 'Actions';
	echo '<span class="caret"></span>';
	echo '</button>';
	echo '<ul class="dropdown-menu pull-right" role="menu">';
	foreach ( $id as $row ) {
		echo '<li><a href="#">';
		echo $row ['run_date_time'];
		echo '</a>';
		echo '</li>
	</ul>
	</div>';
	}
	
}else {
	
	echo ('Error: No Data');
	
}


?>