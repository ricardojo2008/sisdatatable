<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Usuarios Tronweb</title>
</head>

<body>
    <?php include("nvar.php"); ?>
    <!-- TABLA USUARIOS -->
    <div class="container-fluid">
        
        <div class="card">
            <div class="card-header bg-info">
                <h6><i class="fas fa-user-secret"></i> Usuarios en Tronweb / Por compañia</h6>
            </div>
            <div class="card-body">
                <div class="navbar-body">
                    <table id="tablita" class="table  table-sm table-striped table-hover display tablita">
                        <thead class="table">                            
                            <TR>
                                <TH>COD_USR_CIA</TH>                                
                                <TH>COD_CIA</TH>
                                <TH>NUM_USR_CIA</TH>
                                <TH>NOM_USR_CIA</TH>
                                <TH>COD_NIVEL3</TH>
                                <TH>COD_GRP_USR</TH>
                                <TH>EMAIL_USR_CIA</TH>
                            </TR>
                        </thead>
                        <tfoot>
                            <TR>
                                <TH>NUMMA</TH>
                                <TH>COMPAÑIA</TH>                                
                                <TH>LEGAJO</TH>
                                <TH>NOMBRE_COMPLETO</TH>
                                <TH>COD_NIVEL3</TH>
                                <TH>ESTATUS</TH>
                                <TH>EMAIL</TH>
                            </TR>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--  SIGUIENTE DATATABLE ROLES -->
    <div class="container-fluid">
        
        <div class="card">
            <div class="card-header bg-info">
                <h6><i class="fab fa-android"></i> Roles por Usuarios</h6>
            </div>
            <div class="card-body">
                <div class="navbar-body">
                    <table id="tablita1" class="table  table-sm table-striped table-hover display tablita1">
                        <thead class="table">
                            <TR>
                                <TH>COD_USR</TH>
                                <TH>COD_ROL</TH>
                                <TH>FEC_ACTU</TH>
                            </TR>
                        </thead>
                        <tfoot>
                            <TR>
                                <TH>NUMMA</TH>
                                <TH>NOMBRE_ROL</TH>
                                <TH>FEC_ACTU</TH>
                            </TR>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- SIGUIENTE TABLA CONTROLES TAREAS -->
    <div class="container-fluid">
        
        <div class="card">
            <div class="card-header bg-info">
                <h6><i class="fas fa-bars"></i> Datos Control Tarea</h6>
            </div>
            <div class="card-body">
                <div class="navbar-body">
                    <table id="tablita2" class="table  table-sm table-striped table-hover display tablita2">
                        <thead class="table">
                            <TR>
                                <TH>COD_USR_CONTROL</TH>
                                <TH>COD_CIA</TH>
                                <TH>COD_CONTROL</TH>                                
                                <TH>OBS_CONTROL</TH>
                                <TH>FEC_ACTU_BAJA</TH>
                                <TH>FEC_ACTU</TH>
                            </TR>
                        </thead>                        
                        <tfoot>
                            <TR>
                                <TH>NUMMA</TH>
                                <TH>COMPAÑIA</TH>
                                <TH>COD_CONTROL</TH>                               
                                <TH>AUTORIZACION</TH>
                                <TH>BAJA</TH>
                                <TH>ALTA</TH>
                            </TR>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- SIGUIENTE TABLA TRAMITADORES -->
    <div class="container-fluid">
        
        <div class="card">
            <div class="card-header  bg-info">
                <h6><i class="fas fa-address-card"></i> Tramitadores por compañia</h6>
            </div>
            <div class="card-body">
                <div class="navbar-body">
                    <table id="tablita3" class="table  table-sm table-striped table-hover display tablita3">
                        <thead class="table">
                            <TR>
                                <TR>
                                    <TH>COD_USR_TRAMITADOR</TH>
                                    <TH>COD_CIA</TH>
                                    <TH>COD_DOCUM</TH>
                                    <TH>TIP_TRAMITADOR</TH>
                                    <TH>COD_TRAMITADOR</TH>
                                    <TH>COD_NIVEL3</TH>
                                    <TH>COD_SUPERVISOR</TH>
                                    <TH>TIP_ESTADO</TH>
                                </TR>
                            </TR>
                        </thead>
                        <tfoot>
                            <TR>
                                <TH>NUMMA</TH>
                                <TH>COMPAÑIA</TH>
                                <TH>DNI</TH>
                                <TH>TIPO_TRAMI</TH>
                                <TH>CODIGO_TRAMI</TH>
                                <TH>COD_NIVEL3</TH>
                                <TH>COD_SUPERVISOR</TH>
                                <TH>TIP_ESTADO</TH>
                            </TR>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/bootstrap.min.js"></script>        
        <script src="js/dataTables.bootstrap4.min.js"></script>
        <script src="js/configdatatable.js"></script>
        <script>
            //$(document).ready(function() {
            // tabla 0
            var table = retornaTableta('.tablita','php/userprose.php');             
            $('#tablita thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
            });
            // tabla 1
            var table = retornaTableta('.tablita1','php/rolesprose.php');
            $('#tablita1 thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
            });
            // tabla 2
            var table = retornaTableta('.tablita2','php/ctareasprose.php');
            $('#tablita2 thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
            });
            // tabla 3
            var table = retornaTableta('.tablita3','php/tramitaprose.php');
            $('#tablita3 thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
            });
        </script>
</body>

</html>