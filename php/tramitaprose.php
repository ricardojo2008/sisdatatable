<?php
require( 'oracle.ssp.class.php' );
require( 'conec.php' );
                       
$columns = array(
    array( 'db' => 'COD_USR_TRAMITADOR',   'dt' => 0 ),
    array( 'db' => 'COD_CIA',   'dt' => 1 ),
    array( 'db' => 'COD_DOCUM', 'dt' => 2 ),
    array( 'db' => 'TIP_TRAMITADOR',  'dt' => 3 ),    
    array( 'db' => 'COD_TRAMITADOR',   'dt' => 4 ),
    array( 'db' => 'COD_NIVEL3',   'dt' => 5 ),    
    array( 'db' => 'COD_SUPERVISOR',   'dt' => 6 ),
    array( 'db' => 'TIP_ESTADO',   'dt' => 7 )
); 

$primaryKey = 'COD_CIA';
$table = 'A1001339' ;
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

?>