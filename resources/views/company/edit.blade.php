@extends('layouts.app')

@section('title','Editar Empresa')


@section('content')
<div class="xp-contentbar">

    <!-- Start XP Row -->
    <div class="row"> 

        <div class="col-md-12 col-lg-12 col-xl-12">
           <!-- Header and Footer Card -->  
            <div class="card m-b-30">
                <h5 class="card-header">Editar Empresa</h5>
                <div class="card-body">

                    <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">                                                                    
                                <label for="name">Nombre</label>
                                <div class="input-group mb-3">                                    
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre de la empresa" value="{{ old('name', $company->name) }}">                                        
                                </div>
                                @error('name')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror 
                            </div> 

                            <div class="col-md-4">
                                <label for="email">Email:</label>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo electrónico de la empresa" value="{{ old('email', $company->email) }}">
                                </div>
                                @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>                          
                                @enderror                               
                            </div>

                            <div class="col-md-4">
                                <label for="web">Web:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control @error('web') is-invalid @enderror" id="web" name="web" placeholder="Sitio Web de la empresa" value="{{ old('web', $company->web) }}">
                                </div>                             
                            </div>
                                                
                        </div>{{-- End row --}}

                        <div class="row mt-4">                          

                            <div class="col-md-4 mt-5">
                                <div class="form-group">
                                    <label for="exampleInputFile">Logo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="logo" id="logo" accept="image/*">
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
                                    <img class="rounded-circle mx-auto d-block" id="imagePreview" width="200" height="200" src="{{ asset_secure($company->logo) }}" alt="User Avatar">
                                </div>

                            </div>                    

                        </div>{{-- End row --}}

                        <hr />
                        
                        <div class="row">
                            <button type="submit" class="btn btn-warning">Editar Empresa</button> 
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

@section('js')
    <script>
        function readImage (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result); // Renderizamos la imagen
            }
            reader.readAsDataURL(input.files[0]);
            }
            }
    
        $("#logo").change(function () {
            // Código a ejecutar cuando se detecta un cambio de archivO
            readImage(this);    
        });
    </script>
    
@endsection