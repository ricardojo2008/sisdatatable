<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Roles</title>
</head>

<body>
    <?php include("nvar.php"); ?>
    <div class="card w-auto p-4">
        <div class="card-header">
            <h6><i class="fab fa-android"></i>  Roles por Usuarios</h6>
        </div>
        <div class="card-body">
            <div class="navbar-body">
                <table id="tablita" class="table  table-sm table-hover  display tablita1">
                    <thead class="bg-primary">
                        <tr>
                            <th>cod_usr_cia</th>
                            <th>nom_usr_cia</th>
                            <th>cod_rol</th>
                            <th>fec_actu</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <tr>
                            <th>cod_usr_cia</th>
                            <th>nom_usr_cia</th>
                            <th>cod_rol</th>
                            <th>fec_actu</th>
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
                            Consulta SQL
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="spinner-grow text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        SELECT a.cod_usr,b.nom_usr_cia,a.cod_rol,a.fec_actu FROM G1010220 a left join g1002700 b on a.cod_usr = b.cod_usr_cia and b.cod_cia = 1

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script>
       /* $(document).ready(function() {
            $('#tablita').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "php/rolesprose.php"                
            } );
       
        
        //$(document).ready(function() {
        
       
        $('#tablita thead th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
        });
    } );
*/
$(document).ready(function() {
   /* var table =*/ $('#tablita').DataTable({
            
                "processing": true,
                "serverSide": true,
                "ajax": "php/rolesprose.php",
            
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
});
        /*
        table.columns().every(function() {
            var that = this;
            $('input', this.header()).on('keyup change', function() {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });

        });
       /* $('.tablita1 thead th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
        });*/

    </script>
</body>

</html>