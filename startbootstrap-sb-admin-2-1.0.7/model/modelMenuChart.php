<?php
require_once '../utils/conectionClass.php';
class getData {
	function __construct() {
		$con = new Conection ();
		
		$this->conexion = $con->configuracion ();
	}
	public function getDatabyDay() {
		$statement = "SELECT * FROM automation_reports.daily_reports
                      WHERE job_name = 'Mobile_API_Smoke_test'
				      ORDER BY run_date_time DESC;";
		
		$query = $this->conexion->prepare ( $statement );
		
		$query->execute ();
		
		return $query->fetchAll ();
	}
}

?>