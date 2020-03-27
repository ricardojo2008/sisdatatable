<?php 
$sql_details = array(
	'user' => '*',
	'pass' => '*',
	'dbInstance'   => '*'
);
$db_test = '(DESCRIPTION=( ADDRESS_LIST= (ADDRESS= (PROTOCOL=TCP) (HOST=*) (PORT=*)))( CONNECT_DATA= (SID=*) ))';
$conn = oci_connect("*", "*", $db_test);
?>