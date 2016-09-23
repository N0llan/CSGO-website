<?php

$testConn = pg_connect("host=127.0.0.1 port=5432 dbname=postgres user=postgres password=nollan1qaz2wsx");
if ($testConn)
{
	echo 'Successful connection';
} else {
	echo 'Something went wrong in connection';
}
?>