<?php 
require_once ('dbPassword.php');

$dbName = 'postgres';
$dbPort = '5432';
$dbHost = '192.168.0.106';
$dbUser = 'postgres';

class dbConn{

	public function connectDB(){
		return pg_connect('host=$dbHost port=$dbPort dbname=$dbName user=$dbUser password=$password');
	}

	public function disconnectDB(){
		return pg_close();
	}

	public function queryDB($query){

	}

	public function test(){
		echo 'hej vad gör du?';
	}

}



?>