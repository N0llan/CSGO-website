<?php 
require_once ('dbPassword.php');

$dbName = 'postgres';
$dbPort = '5432';
$dbHost = '192.168.0.106';
$dbUser = 'postgres';

class dbConn{

	public function connectDB(){
		$dbConnected=pg_connect('host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$password');
		return $dbConnected;
	}

	public function disconnectDB(){
		if ($dbConnected != NULL){
			return pg_close();
		}
		return 0;
	}

	public function queryDB($query){
		return pg_query($dbConn);
	}

}



?>