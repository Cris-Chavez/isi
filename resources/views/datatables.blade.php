@section('js')
    <!-- Función DataTable -->
<script>
    $(function () {          
      $('#table').DataTable({
        
        responsive: true,
        autowith: false,

        "language":{
            "lengthMenu": "Mostrar _MENU_ datos por página",
            "zeroRecords": "Nada encontrado - Disculpa",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No existen datos",
            "infoFiltered": "(Filtrado de un total de _MAX_ datos totales)",
            "search": "Buscar:",
            "paginate":{
                next : "Anterior",
                previous: "Siguiente"
            }
        },
        dom: '<"row"<"col-md-6 text-left"B><"col-md-6 text-right"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        // dom: 'Bftip',
        "buttons": [
            {
                extend: "excel",
                text: '<i class="fa fa-file-excel-o"></i>',
                className: "btn-success btn-sm mr-1",
                exportOptions:{
                    columns: [0,1,2,3,4,5]
                },
                title: "Usuarios"
            },
            {
                extend: "pdf",
                text: '<i class="fa fa-file-pdf-o"></i>',
                className: "btn-danger btn-sm mr-1",
                exportOptions:{
                    columns: [0,2,3,4,5]
                },
                messageTop: 'Listado de Empresas',
                title: "Empresas"
            },           
            {
                extend: "print",
                text: '<i class="fa fa-print"></i>',
                className: "btn-info btn-sm",
                exportOptions:{
                    columns: [0,1,2,3,4,5]
                }
            }
        ]
      });
    });
</script>
    
@endsection
