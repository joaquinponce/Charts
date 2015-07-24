<?php
class Conection 

{
	private $dbh;
	private $driver = 'mysql';
	private $host = 'sql-01.1.app.qa.pfops.com';
	private $port = '3306';
	private $dbname = 'automation_reports';
	private $username = 'joaquin.ponce';
	private $pass = '7aM9DDRxpFGyGQdB';
	
	/**
	 * Connection to BD  PDO
	 */
	public function configuracion() 

	{
		$dns = $this->driver . ':host=' . $this->host . ';dbname=' . $this->dbname;
		
		try {
			
			$this->dbh = new PDO ( $dns, $this->username, $this->pass );
			
			$this->dbh->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch ( PDOException $e ) {
			
			die ( 'Connection failed: ' . $e->getMessage () );
		}
		
		return $this->dbh;
	}
}

?>