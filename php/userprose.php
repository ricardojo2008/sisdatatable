<?php
require( 'oracle.ssp.class.php' );
require( 'conec.php' );
$columns = array(
    array( 'db' => 'COD_USR_CIA', 'dt' => 0 ),
    array( 'db' => 'COD_CIA',  'dt' => 1 ),
    array( 'db' => 'NUM_USR_CIA',   'dt' => 2 ),
    array( 'db' => 'NOM_USR_CIA',   'dt' => 3 ),
    array( 'db' => 'COD_NIVEL3',   'dt' => 4 ),
    array( 'db' => 'COD_GRP_USR',   'dt' => 5 ),
    array( 'db' => 'EMAIL_USR_CIA',   'dt' => 6 )
); 

$primaryKey = 'COD_CIA';
$table = 'G1002700' ;

echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

?>