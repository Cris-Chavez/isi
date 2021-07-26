@extends('layouts.app')

@section('title','Editar Empleado')


@section('content')
<div class="xp-contentbar">

    <!-- Start XP Row -->
    <div class="row"> 

        <div class="col-md-12 col-lg-12 col-xl-12">
           <!-- Header and Footer Card -->  
            <div class="card m-b-30">
                <h5 class="card-header">Editar Empleado</h5>
                <div class="card-body">

                    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">                                                                    
                                <label for="name">Nombres</label>
                                <div class="input-group mb-3">                                    
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre del empleado" value="{{ old('name', $employee->name) }}">                                        
                                </div>
                                @error('name')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror 
                            </div> 

                            <div class="col-md-6">                                                                    
                                <label for="lastName">Apellidos</label>
                                <div class="input-group mb-3">                                    
                                    <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="Apellido del empleado" value="{{ old('lastName', $employee->lastName) }}">                                        
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
                                        <option value="{{ $company->id }}" @if ($company->id == $employee->company_id) selected @endif>{{ $company->name }}</option>
                                    @endforeach                                   
                                </select>     
                                @error('company')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror                    
                            </div> 

                            <div class="col-md-4">
                                <label for="email">Email:</label>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo electrónico del empleado" value="{{ old('email', $employee->email) }}">
                                </div>
                                @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror                               
                            </div>

                            <div class="col-md-4">
                                <label for="phone">Teléfono:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Teléfono del empleado" value="{{ old('phone', $employee->phone) }}">
                                </div>                             
                            </div>
                                                
                        </div>{{-- End row --}}

                        <hr />
                        
                        <div class="row">
                            <button type="submit" class="btn btn-warning">Editar Empleado</button> 
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