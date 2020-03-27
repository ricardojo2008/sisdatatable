<?php
require( 'oracle.ssp.class.php' );
require( 'conec.php' );

                           
$columns = array(
    array( 'db' => 'COD_USR_CONTROL',   'dt' => 0 ),
    array( 'db' => 'COD_CIA', 'dt' => 1 ),
    array( 'db' => 'COD_CONTROL',  'dt' => 2 ),    
    array( 'db' => 'OBS_CONTROL',   'dt' => 3 ),
    array( 'db' => 'FEC_ACTU_BAJA',   'dt' => 4 ),
    array( 'db' => 'FEC_ACTU',   'dt' => 5 )
); 

$primaryKey = 'COD_CIA';
$table = 'G1019401_MAR' ;
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

?>