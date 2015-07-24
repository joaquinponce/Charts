<?php
require_once '../utils/conectionClass.php';
class getDates {
	function __construct() {
		$con = new Conection ();
		
		$this->conexion = $con->configuracion ();
	}
	public function getAllDates() {
		$statement = "SELECT run_date_time FROM automation_reports.daily_reports;";
		
		$query = $this->conexion->prepare ( $statement );
		
		$query->execute ();
		
		return $query->fetchAll(PDO::FETCH_OBJ);
	}
}

?>