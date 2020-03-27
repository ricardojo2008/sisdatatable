<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Control Tarea</title>
</head>

<body>
    <?php include("nvar.php"); ?>
    <div class="card w-auto p-4">
        <div class="card-header">
            <H6><i class="fas fa-bars"></i> Datos Control Tarea</H6>
        </div>
        <div class="card-body">
            <div class="navbar-body">
                <table class="table  table-sm table-hover  display AllDataTables">
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
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="lg-12">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Datos Tables SQL
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
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="lg-12">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Mas info..
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="lg-12">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Mas info..
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
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
        // });
    </script>
</body>

</html>