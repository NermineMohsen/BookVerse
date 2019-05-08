<?php
$server_name = 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$database_name = 'bookverse';

$dbc = mysql_connect($server_name, $mysql_user, $mysql_password);
if (!$dbc) {
	die('Could not connect to database: ' . mysql_error());
}
mysql_select_db($database_name);
?>