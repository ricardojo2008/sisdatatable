<?php
require( 'oracle.ssp.class.php' );
require( 'conec.php' );

//SELECT A.COD_ROL,A.COD_CIA,A.COD_SISTEMA,A.COD_SECTOR,A.COD_SUBSECTOR,A.COD_RAMO,A.COD_NIVEL_SALTO, A.COD_NIVEL1,A.COD_NIVEL2,A.COD_NIVEL3,A.COD_SIST_AUT,A.COD_NIVEL_AUTORIZACION FROM G2000230 
$columns = array(
    array( 'db' => 'COD_ROL', 'dt' => 0 ),
    array( 'db' => 'COD_CIA',  'dt' => 1 ),
    array( 'db' => 'COD_SISTEMA',   'dt' => 2 ),
    array( 'db' => 'COD_SECTOR',   'dt' => 3 ),
    array( 'db' => 'COD_SUBSECTOR',   'dt' => 4 ),
    array( 'db' => 'COD_RAMO',   'dt' => 5 ),
    array( 'db' => 'COD_NIVEL_SALTO',   'dt' => 6 ),
    array( 'db' => 'COD_NIVEL1',   'dt' => 7 ),
    array( 'db' => 'COD_NIVEL2',   'dt' => 8 ),
    array( 'db' => 'COD_NIVEL3',   'dt' => 9 ),
    array( 'db' => 'COD_SIST_AUT',   'dt' => 10 ),
    array( 'db' => 'COD_NIVEL_AUTORIZACION',   'dt' => 11 )
); 

$primaryKey = 'COD_ROL';
$table = 'G2000230' ;

echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

?>