<?php
require_once '../utils/conectionClass.php';
class getJobDate {
	function __construct() {
		$con = new Conection ();
		
		$this->conexion = $con->configuracion ();
	}
	
	public function getjob($dateSelected) {
		$statement = "SELECT a.report_id, a.jenkins_run_number, a.job_name,a.environment, a.test_group, a.run_date_time
                      FROM automation_reports.daily_reports a
                      WHERE a.run_date_time = '$dateSelected';";
		
		$query = $this->conexion->prepare ( $statement );
		
		$query->execute ();
		
		return $query->fetchAll();
	}
	
	public function getExecutionDetailsByJob($reportNum) {

		$statement = "SELECT b.testcase_id,b.rep_id, b.testcase_name,COUNT(b.testcase_name) AS count, b.status
                      FROM automation_reports.daily_reports a, automation_reports.test_detail b
                      WHERE b.rep_id = a.report_id AND a.report_id = '$reportNum'
                      GROUP BY status;";
	
		$query = $this->conexion->prepare ( $statement );
	
		$query->execute ();
	
		return $query->fetchAll();
	}
	
}

?>