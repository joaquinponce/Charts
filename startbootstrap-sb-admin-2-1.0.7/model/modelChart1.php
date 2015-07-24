<?php
require_once '../utils/conectionClass.php';
class getDataChart {
	function __construct() {
		$con = new Conection ();
		
		$this->conexion = $con->configuracion ();
	}
	public function getDataChart1() {
		$statement = "SELECT * FROM automation_reports.daily_reports 
                      ORDER BY run_date_time DESC LIMIT 3;";
		
		$query = $this->conexion->prepare ( $statement );
		
		$query->execute ();
		
		return $query->fetchAll ();
	}
}

?>