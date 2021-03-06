@extends('layouts.app')

@section('title','Listado de Empleados')

@section('css')

<!-- Start CSS -->
    <!-- DataTables CSS -->
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Responsive Datatable CSS -->
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- toastr --}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endsection

@section('content')
<div class="xp-contentbar">

    <!-- Start XP Row -->
    <div class="row"> 

        <div class="col-md-12 col-lg-12 col-xl-12">
           <!-- Header and Footer Card -->  
            <div class="card m-b-30">
                <h5 class="card-header">Listado de Empleados</h5>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">No.</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Empresa</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody> 
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td style="text-align: center">{{ $loop->iteration }}</td>                                        
                                        <td class="name">{{ $employee->name }}</td>
                                        <td class="lastName">{{ $employee->lastName }}</td>
                                        <td>{{ $employee->company->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        @if (empty($employee->phone))
                                            <td> No ingresado </td>
                                        @else
                                            <td>{{ $employee->phone }} </td>                                            
                                        @endif
                                        <td style="width: 16%">                                            
                                            <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-round btn-primary"><i class="fa fa-info-circle"></i></a>
                                            <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-round btn-warning"><i class="fa fa-edit"></i></a>                                            
                                            <form action="{{ route('employee.destroy',$employee->id) }}" class="d-inline form-destroy"method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-round btn-danger"><i class="fa fa-times"></i></button>
                                            </form> 
                                        </td>
                                    </tr>                                     
                                @endforeach                                                                                                             
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <!-- Header and Footer Card -->    
        </div>
         
    </div>
    <!-- End XP Row -->

</div>
    
@endsection

@section('js')

    <!-- Required Datatable JS -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Buttons Examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    
    <!-- Responsive Examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Sweet-Alert JS -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <!-- Confirm init JS -->
   <script src="{{ asset('assets/plugins/jquery-confirm/js/jquery-confirm.js') }}"></script>
   <script src="{{ asset('assets/js/init/confirm-init.js') }}"></script>

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
                    title: "Empleados"
                },
                {
                    extend: "pdf",
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    className: "btn-danger btn-sm mr-1",
                    exportOptions:{
                        columns: [0,2,3,4,5]
                    },
                    messageTop: 'Listado de Empleados',
                    title: "Empleados"
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

    <!-- Función Delete -->
    <script>
        $('.form-destroy').submit(function (e){

            e.preventDefault();

            let name = $(this).parents("tr").find(".name").html();
            let lastName = $(this).parents("tr").find(".lastName").html();

            Swal.fire({
                title: '¿Desea eliminar al empleado '+name+' '+lastName+'?',
                text: "Confirme que desea eliminar, de lo contrario presione cancel",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: "Cancelar",
                confirmButtonText: 'Sí, eliminar!'
                }).then((result) => {
                    if (result.value) {
                        this.submit();
                    }
                })

        })        

    </script>

    <!-- Toarts -->
    <script>
        @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('success') }}");
        @endif
    
        @if(Session::has('delete'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('delete') }}");
        @endif
    
        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif
    
        @if(Session::has('edit'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('edit') }}");
        @endif
    </script>
    
@endsection