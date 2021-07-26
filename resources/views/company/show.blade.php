@extends('layouts.app')

@section('title','Detalle de Empresa')


@section('content')
<div class="xp-contentbar">

    <!-- Start XP Row -->
    <div class="row"> 

        <div class="col-md-12 col-lg-12">
           <!-- Header and Footer Card -->  
            <div class="card m-b-30">
                <h5 class="card-header">Detalle de Empresa</h5>
                <div class="card-body">

                    <div class="xp-social-profile">
                        <div class="xp-social-profile-img">
                            <div class="row">
                                <div class="col-12 px-1">
                                    <img src="{{ asset('assets/images/ui-images/por2.jpg') }}"  height="100" width="100%" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-top">
                            <div class="row">
                                <div class="col-3">
                                    <div class="xp-social-profile-star py-3">
                                        <i class="icon-star font-20"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="xp-social-profile-avatar text-center">
                                        <img src="{{ asset($company->logo) }}" alt="user-profile" class="rounded-circle mx-auto d-block mt-n5" height="100" height="200">
                                        {{-- <img class="rounded-circle mx-auto d-block" id="imagePreview" width="200" height="200" src="{{ asset('assets\images\avatar\no-logo.png') }}" alt="User Avatar"> --}}

                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="xp-social-profile-menu text-right py-3">
                                        <i class="icon-options font-20"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-middle text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="xp-social-profile-title">
                                        <h5 class="my-1 text-black">{{ $company->name }}</h5>
                                    </div>
                                    <div class="xp-social-profile-subtitle">
                                        <p class="mb-3 text-muted">{{ $company->email }}</p>
                                    </div>
                                    <div class="xp-social-profile-subtitle">
                                        <p class="mb-3 text-muted">{{ $company->web }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-bottom text-center">
                            <div class="row">
                                <div class="col-4">
                                    <div class="xp-social-profile-media pt-3 border">
                                        <h5 class="text-black my-1">{{ $employees }}</h5>
                                        <p class="mb-0 text-muted">Empleados</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-followers pt-3 border">
                                        <h5 class="text-black my-1">{{ date("d F Y", strtotime($company->created_at)) }}</h5>
                                        <p class="mb-0 text-muted">Fecha de creación</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-following pt-3 border">
                                        <h5 class="text-black my-1">{{ date("d F Y", strtotime($company->updated_at)) }}</h5>
                                        <p class="mb-0 text-muted">Última modificación</p>
                                    </div>
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