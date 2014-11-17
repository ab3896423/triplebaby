<?php
$db_host = 'localhost';
$db_user = 'triplebaby';
$db_pass = 'pocky520';
$db_name = 'triplebaby';
$db_link = mysql_connect($db_host, $db_user, $db_pass) or die('Error with MySQL connection');
mysql_query("SET NAMES 'utf8'") or die('Error with Database selsction')
?>
