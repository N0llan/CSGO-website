<?php 
require_once ('dbPassword.php');

$dbName = 'postgres';
$dbPort = '5432';
$dbHost = '127.0.0.1';
$dbUser = 'postgres';

class dbConn{

	public function connectDB(){
		$dbConnected=pg_connect("host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$password");
		if ($dbConnected != NULL){
			return true;
		} else {
			echo 'Vad händer';
		}
	}

	public function disconnectDB(){
		if ($dbConnected != NULL){
			return pg_close();
		}
		return 0;
	}

	public function queryDB($query){
		return pg_query($dbConnected, $query);
	}

}

?>