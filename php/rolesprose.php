<?php
require( 'oracle.ssp.class.php' );
require( 'conec.php' );
$columns = array(
    array( 'db' => 'COD_USR', 'dt' => 0 ),
    array( 'db' => 'COD_ROL',   'dt' => 1 ),
    array( 'db' => 'FEC_ACTU',     'dt' => 2 )
); 

$primaryKey = 'COD_USR_CIA';
$table = 'G1010220' ;
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>