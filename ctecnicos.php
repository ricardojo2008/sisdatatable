<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Controles Tecnicos</title>
</head>

<body>
    <?php include("nvar.php"); ?>
    <div class="card w-auto p-4">
        <div class="card-header">
            <h6>Controles Tecnicos por Items</h6>
        </div>
        <div class="card-body">
            <div class="navbar-body">
                <table id="tablita" class="table  table-sm table-hover  display tabal">
                    <thead class="table bg-light">
                        <tr>
                            <TH>COD_ROL</TH>
                            <TH>COD_CIA</TH>
                            <TH>COD_SISTEMA</TH>
                            <TH>COD_SECTOR</TH>
                            <TH>COD_SUBSECTOR</TH>
                            <TH>COD_RAMO</TH>
                            <TH>COD_NIVEL_SALTO</TH>
                            <TH>COD_NIVEL1</TH>
                            <TH>COD_NIVEL2</TH>
                            <TH>COD_NIVEL3</TH>
                            <TH>COD_SIST_AUT</TH>
                            <TH>COD_NIVEL_AUTORIZACION</TH>

                        </tr>
                    </thead>                  
                    <tfoot>
                        <tr>
                            <TH>COD_ROL</TH>
                            <TH>COD_CIA</TH>
                            <TH>COD_SISTEMA</TH>
                            <TH>COD_SECTOR</TH>
                            <TH>COD_SUBSECTOR</TH>
                            <TH>COD_RAMO</TH>
                            <TH>COD_NIVEL_SALTO</TH>
                            <TH>COD_NIVEL1</TH>
                            <TH>COD_NIVEL2</TH>
                            <TH>COD_NIVEL3</TH>
                            <TH>COD_SIST_AUT</TH>
                            <TH>COD_NIVEL_AUTORIZACION</TH>

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
                        SELECT a.cod_rol,a.cod_cia,a.cod_sistema,a.cod_sector,a.cod_subsector,a.cod_ramo,a.cod_nivel_salto, a.cod_nivel1,a.cod_nivel2,a.cod_nivel3,a.cod_sist_aut,a.cod_nivel_autorizacion FROM G2000230 a inner join (select b.cod_rol from g1002700 a left join g2000260 b on a.cod_usr_cia = b.cod_usr_cia where a.cod_grp_usr = 'GENERAL' group by b.cod_rol ) b on a.cod_rol = b.cod_rol 

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/configdatatable.js"></script>
        <script>
            //$(document).ready(function() {
            // tabla 1
            var table = retornaTableta('#tablita',"php/ctecnicoprose.php");             
            $('#tablita thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="' + title + '"/>');
            });
    </script>
</body>

</html>