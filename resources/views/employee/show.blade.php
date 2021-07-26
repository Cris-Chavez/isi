@extends('layouts.app')

@section('title','Detalle de Empleado')


@section('content')
<div class="xp-contentbar">

    <!-- Start XP Row -->
    <div class="row"> 

        <div class="col-md-12 col-lg-12">
           <!-- Header and Footer Card -->  
            <div class="card m-b-30">
                <h5 class="card-header">Detalle de Empleado</h5>
                <div class="card-body">
                    <div class="xp-social-profile-bottom text-center">
                        <div class="row">
                            <div class="col-6">
                                <div class="xp-social-profile-media pt-3 border">
                                    <h5 class="text-black my-1">{{ $employee->name }}</h5>
                                    <p class="mb-0 text-muted">Nombre</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="xp-social-profile-media pt-3 border">
                                    <h5 class="text-black my-1">{{ $employee->lastName }}</h5>
                                    <p class="mb-0 text-muted">Apellido</p>
                                </div>
                            </div>                                
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <div class="xp-social-profile-media pt-3 border">
                                    <h5 class="text-black my-1">{{ $employee->company->name }}</h5>
                                    <p class="mb-0 text-muted">Empresa</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="xp-social-profile-media pt-3 border">
                                    <h5 class="text-black my-1">{{ $employee->email }}</h5>
                                    <p class="mb-0 text-muted">Correo Elecrónico</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="xp-social-profile-media pt-3 border">
                                    @if (empty($employee->phone))
                                        <h5 class="text-black my-1">No ingresado</h5>
                                        <p class="mb-0 text-muted">Teléfono</p>                                        
                                    @else
                                        <h5 class="text-black my-1">{{ $employee->phone }}</h5>
                                        <p class="mb-0 text-muted">Teléfono</p>                                        
                                    @endif                                    
                                </div>
                            </div>                                
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="xp-social-profile-followers pt-3 border">
                                    <h5 class="text-black my-1">{{ date("d F Y", strtotime($employee->created_at)) }}</h5>
                                    <p class="mb-0 text-muted">Fecha de creación</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="xp-social-profile-following pt-3 border">
                                    <h5 class="text-black my-1">{{ date("d F Y", strtotime($employee->updated_at)) }}</h5>
                                    <p class="mb-0 text-muted">Última modificación</p>
                                </div>
                            </div>                               
                        </div>

                    </div>                
                </div>
            </div>
            <!-- Header and Footer Card -->    
        </div>
         
    </div>
    <!-- End XP Row -->

</div>
    
@endsection