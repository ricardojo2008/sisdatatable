function throttle(callback, delay) {
    var last;
    var timer;
    return function () {
      var context = this;
      var now = +new Date();
      var args = arguments;
      if (last && now < last + delay) {
        // le délai n'est pas écoulé on reset le timer
        clearTimeout(timer);
        timer = setTimeout(function () {
          last = now;
          callback.apply(context, args);
        }, delay);
      } else {
        last = now;
        callback.apply(context, args);
      }
    };
  }
function retornaTableta(valor,ruta){

    cadena = $(valor).DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": ruta,
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
        },
        
        "responsive": false,
        "initComplete": function () {
        var api = this.api();

        // Apply the search
        api.columns().every(function () {
             var that = this;
             $('input', this.header()).on('keyup change', function() {
                 if (that.search() !== this.value) {
                  that.search(this.value).draw();
                }
            });
        });
        },
        "colReorder": true,
        "lengthMenu": [[3, 15, 30, -1], [3, 15, 30, "All"]]
    });

    return cadena;
}