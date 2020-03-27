<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Usuarios Tronweb</title>
</head>

<body>
    <?php include("nvar.php"); ?>
    <div class="container-fluid">
        <br>
        <div class="card">
            <!--div class="card w-auto p-4"-->
            <div class="card-header bg-primary">
                <h6> <i class="fas fa-user-secret"></i> Usuarios en Tronweb / Rol control tecnico (RolCT)</h6>
            </div>
            <div class="card-body">
                <div class="navbar-body">
                    <table class="table  table-sm table-striped table-hover display AllDataTables">
                        <thead class="table bg-primary">
                            <tr>
                                <th>cod_cia</th>
                                <th>cod_usr_cia</th>
                                <th>num_usr_cia</th>
                                <th>nom_usr_cia</th>
                                <th>cod_nivel3</th>
                                <th>cod_grp_usr</th>
                                <th>email_usr_cia</th>
                                <th>cod_rolCT</th>
                                <th>Tramitador? (1=Si/0=No)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stid = oci_parse($conn, "select a.cod_cia,a.cod_usr_cia,a.num_usr_cia,a.nom_usr_cia,a.cod_nivel3,a.cod_grp_usr,a.email_usr_cia, b.cod_rol, (select count(*) from A1001339 where A1001339.cod_usr_tramitador = a.cod_usr_cia and A1001339.cod_cia = a.cod_cia  ) trami from g1002700 a left join g2000260 b on a.cod_usr_cia = b.cod_usr_cia where a.cod_grp_usr = 'GENERAL'");
                            oci_execute($stid);
                            while ($fila = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                                echo "<tr>";
                                foreach ($fila as $elemento) {
                                    echo "    <td>" . ($elemento !== null ? htmlentities($elemento, ENT_QUOTES) : "") . "</td>";
                                }
                                echo "</tr>";
                            } ?>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <br>
        <div class="card">
            <div class="card-header">
                <H6><i class="fas fa-bars"></i> Datos Control Tarea</H6>
            </div>
            <div class="card-body">
                <div class="navbar-body">
                    <table class="table table-sm table-striped table-hover display AllDataTables2">
                        <thead class="table bg-primary">
                            <tr>
                                <th>Cod_cia</th>
                                <th>Cod_control</th>
                                <th>Cod_usr_control</th>
                                <th>Obs_control</th>
                                <th>Descripcion</th>
                                <th>Tarea</th>
                                <th>Baja</th>
                                <th>Alta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stid = oci_parse($conn, "SELECT a.cod_cia,a.cod_control,a.cod_usr_control,a.obs_control,b.descripcion,b.obs_control tarea,a.fec_actu_baja Baja,a.fec_actu Alta FROM G1019401_MAR a left join G1019400_MAR b on a.cod_control = b.cod_control where a.cod_cia = b.cod_cia");
                            oci_execute($stid);
                            while ($fila = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                                echo "<tr>";
                                foreach ($fila as $elemento) {
                                    echo "    <td>" . ($elemento !== null ? htmlentities($elemento, ENT_QUOTES) : "") . "</td>";
                                }
                                echo "</tr>";
                            } ?>
                        </tbody>
                        <tfoot>
                            <tr>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
            <div class="container-fluid">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h6>Sistemas Emisor por Usuario</h6>
                    </div>
                    <div class="card-body">
                        <div class="navbar-body">
                            <table class="table table-sm table-striped table-hover display AllDataTables3">
                                <thead class="table bg-primary">
                                    <tr>
                                        <th>Cod_cia</th>
                                        <th>Cod_usr_cia</th>
                                        <th>Nom_usr_cia</th>
                                        <th>Cod_sist_emisor</th>
                                        <th>Fec_actu</th>
                                        <th>Realizado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $stid = oci_parse($conn, "SELECT a.cod_cia,a.cod_usr_cia,b.nom_usr_cia,a.cod_sist_emisor,a.fec_actu,a.cod_usr ejecuta FROM G2009050_MAR a left join g1002700 b on a.cod_usr_cia = b.cod_usr_cia where a.cod_cia = b.cod_cia");
                                    oci_execute($stid);
                                    while ($fila = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                                        echo "<tr>";
                                        foreach ($fila as $elemento) {
                                            echo "    <td>" . ($elemento !== null ? htmlentities($elemento, ENT_QUOTES) : "") . "</td>";
                                        }
                                        echo "</tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="lg-12">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    SQL USUARIOS
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                select a.cod_cia,a.cod_usr_cia,a.num_usr_cia,a.nom_usr_cia,a.cod_nivel3,a.cod_grp_usr,a.email_usr_cia, b.cod_rol, (select count(*) from A1001339 where A1001339.cod_usr_tramitador = a.cod_usr_cia and A1001339.cod_cia = a.cod_cia ) trami from g1002700 a left join g2000260 b on a.cod_usr_cia = b.cod_usr_cia where a.cod_grp_usr = 'GENERAL'

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="lg-12">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    SQL ROLES USER
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                SELECT a.cod_usr,b.nom_usr_cia,a.cod_rol,a.fec_actu FROM G1010220 a left join g1002700 b on a.cod_usr = b.cod_usr_cia and b.cod_cia = 1 where b.cod_grp_usr = 'GENERAL'

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="lg-12">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    SQL CONTROLES TAREA
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                SELECT a.cod_cia,a.cod_control,a.cod_usr_control,a.obs_control,b.descripcion,b.obs_control tarea,a.fec_actu_baja Baja,a.fec_actu Alta FROM G1019401_MAR a left join G1019400_MAR b on a.cod_control = b.cod_control where a.cod_cia = b.cod_cia

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="lg-12">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    SQL TRAMITADORES
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                SELECT cod_cia,cod_docum,tip_tramitador,cod_tramitador,cod_nivel3,cod_usr_tramitador,cod_supervisor,tip_estado FROM A1001339

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/bootstrap.min.js"></script>        
        <script src="js/dataTables.bootstrap4.min.js"></script>
        <script>
            //$(document).ready(function() {
            var table = $('.AllDataTables').DataTable({
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": " _MENU_ ",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Sin registros que mostrar.",
                    "sInfo": "Registros del _START_ al _END_ total de _TOTAL_ registros",
                    "sInfoEmpty": "Registros del 0 al 0 total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
            $('.AllDataTables thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
            });
            table.columns().every(function() {
                var that = this;
                $('input', this.header()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });

            });
            var table2 = $('.AllDataTables2').DataTable({
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": " _MENU_ ",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Sin registros que mostrar.",
                    "sInfo": "Registros del _START_ al _END_ total de _TOTAL_ registros",
                    "sInfoEmpty": "Registros del 0 al 0 total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
            $('.AllDataTables2 thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
            });
            table2.columns().every(function() {
                var that = this;
                $('input', this.header()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });

            });
            // });
            var table3 = $('.AllDataTables3').DataTable({
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": " _MENU_ ",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Sin registros que mostrar.",
                    "sInfo": "Registros del _START_ al _END_ total de _TOTAL_ registros",
                    "sInfoEmpty": "Registros del 0 al 0 total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
            $('.AllDataTables3 thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
            });
            table3.columns().every(function() {
                var that = this;
                $('input', this.header()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });

            });
        </script>
</body>

</html>