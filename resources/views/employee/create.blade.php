@extends('layouts.app')

@section('title','Nuevo Empleado')


@section('content')
<div class="xp-contentbar">

    <!-- Start XP Row -->
    <div class="row"> 

        <div class="col-md-12 col-lg-12 col-xl-12">
           <!-- Header and Footer Card -->  
            <div class="card m-b-30">
                <h5 class="card-header">Nuevo Empleado</h5>
                <div class="card-body">

                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">                                                                    
                                <label for="name">Nombres</label>
                                <div class="input-group mb-3">                                    
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre del empleado" value="{{ old('name') }}">                                        
                                </div>
                                @error('name')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror 
                            </div> 

                            <div class="col-md-6">                                                                    
                                <label for="lastName">Apellidos</label>
                                <div class="input-group mb-3">                                    
                                    <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="Apellido del empleado" value="{{ old('lastName') }}">                                        
                                </div>
                                @error('name')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror 
                            </div> 
                        </div>{{-- End row --}}

                        <div class="row">
                            <div class="col-md-4">
                                <label for="company">Empresa</label>
                                <select class="form-control @error('company') is-invalid @enderror" name="company">
                                    <option disabled selected>Seleccione...</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach                                   
                                </select>     
                                @error('company')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror                    
                            </div> 

                            <div class="col-md-4">
                                <label for="email">Email:</label>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo electrónico del empleado" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror                               
                            </div>

                            <div class="col-md-4">
                                <label for="phone">Teléfono:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Teléfono del empleado" value="{{ old('phone') }}">
                                </div>                             
                            </div>
                                                
                        </div>{{-- End row --}}
{{-- 
                        <div class="row mt-4">                          

                            <div class="col-md-4 mt-5">
                                <div class="form-group">
                                    <label for="exampleInputFile">Avatar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="avatar" id="avatar" accept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">Seleccione una imagen</label>
                                        </div>
                                    </div>
                                </div>                                
                                @error('logo')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror 
                            </div>
                            
                            <div class="col-md-4">
                                <div class="widget-user-image" style="text-align: center">
                                    <img class="rounded-circle mx-auto d-block" id="imagePreview" width="200" height="200" src="{{ asset('assets\images\avatar\no-photo.jpg') }}" alt="User Avatar">
                                </div>
                            </div>    
                            
                            <div class="col-md-4 mt-5">
                                <div class="form-group">
                                    <label for="exampleInputFile">¿Desea que el empleado tenga acceso al sistema?</label>
                                    <div class="input-group">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="access" value="1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Si</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="access" value="0" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadioInline2">No</label>
                                          </div>
                                    </div>
                                </div>                              
                            </div>

                        </div>End row --}}

                        <hr />
                        
                        <div class="row">
                            <button type="submit" class="btn btn-success">Agregar Empleado</button> 
                        </div>{{-- End row --}}                                             
                    </form>


                </div>
            </div>
            <!-- Header and Footer Card -->    
        </div>
         
    </div>
    <!-- End XP Row -->

</div>
    
@endsection
