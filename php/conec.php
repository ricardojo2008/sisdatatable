<?php 
$sql_details = array(
	'user' => 'rjlope2',
	'pass' => 'M4pfre2022',
	'dbInstance'   => '//10.223.240.160:1521/TW_MAB'
);
$db_test = '(DESCRIPTION=( ADDRESS_LIST= (ADDRESS= (PROTOCOL=TCP) (HOST=10.223.240.160) (PORT=1521)))( CONNECT_DATA= (SID=TW_MAB) ))';
$conn = oci_connect("rjlope2", "M4pfre2022", $db_test);
?>