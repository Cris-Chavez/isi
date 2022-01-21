<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a Responsive Bootstrap 4 Admin Dashboard Template">
    <meta name="keywords" content="admin, admin template, admin panel, dashboard template, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>
        ISI | @yield('title')
    </title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ secure_asset('assets/images/isi-ico.ico') }}">

    <!-- Start CSS -->
    <!-- Chartist Chart CSS -->
    <link rel="stylesheet" href="{{ secure_asset('assets/plugins/chartist-js/chartist.min.css') }}">

    <!-- Datepicker CSS -->
    <link href="{{ secure_asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">   

    <link href="{{ secure_asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    @yield('css')
    
    <!-- End CSS -->

</head>

<body class="xp-vertical">
    <!-- Search Modal -->
    <div class="modal search-modal fade" id="xpSearchModal" tabindex="-1" role="dialog" aria-labelledby="xpSearchModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="xp-searchbar">
                <form>
                    <div class="input-group">
                      <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn" type="submit" id="button-addon2">GO</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start XP Container -->
    <div id="xp-container">

        <!-- Start XP Leftbar -->
        <div class="xp-leftbar">    

            <!-- Start XP Sidebar -->
            <div class="xp-sidebar">

                <!-- Start XP Logobar -->
                <div class="xp-logobar text-center">
                    <a href="{{ route('home') }}" class="xp-logo"><img src="{{ secure_asset('assets/images/isi.jpg') }}" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End XP Logobar -->

                <!-- Start XP Navigationbar -->
                <div class="xp-navigationbar">
                    <ul class="xp-vertical-menu">
                        <li class="xp-vertical-header">Opciones</li>
                        <li>
                            <a href="{{ route('home') }}">
                              <i class="icon-speedometer"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                              <i class="fa fa-user"></i><span>Empleados</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">
                                <li><a href="{{ route('employee.index') }}">Listado</a></li>
                                <li><a href="{{ route('employee.create') }}">Crear Empleado</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <i class="fa fa-building"></i><span>Empresas</span><i class="icon-arrow-right pull-right"></i>
                            </a>
                            <ul class="xp-vertical-submenu">                                
                                <li><a href="{{ route('company.index') }}">Listado</a></li>                                
                                <li><a href="{{ route('company.create') }}">Crear Empresa</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- End XP Navigationbar -->

            </div>
            <!-- End XP Sidebar -->

        </div>
        <!-- End XP Leftbar -->

        <!-- Start XP Rightbar -->
        <div class="xp-rightbar">

            <!-- Start XP Topbar -->
            <div class="xp-topbar shadow">

                <!-- Start XP Row -->
                <div class="row"> 

                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <a class="xp-menu-hamburger" href="javascript:void();">
                               <i class="icon-menu font-20 text-white"></i>
                             </a>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-11 col-lg-11 order-1 order-md-2">
                        <div class="xp-profilebar text-right">
                            <ul class="list-inline mb-0">
                                <span class="text-white">{{ Auth::user()->email }}</span>
                                <li class="list-inline-item mr-0">
                                    <div class="dropdown xp-userprofile">
                                        <a class="dropdown-toggle" href="#" role="button" id="xp-userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ secure_asset(Auth::user()->avatar) }}" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                                            <a class="dropdown-item py-3 text-white text-center font-16" href="#">Acciones</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="dropdown-item">
                                                <i class="icon-power text-danger mr-2"></i> Salir del sistema
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
            <!-- End XP Topbar -->

            <!-- Start XP Breadcrumbbar -->                    
            <div class="xp-breadcrumbbar">
                <div class="row">
                    
                </div>          
            </div>
            <!-- End XP Breadcrumbbar -->

            <!-- Start XP Contentbar -->    

            @yield('content')
            
            <!-- End XP Contentbar -->

            <!-- Start XP Footerbar -->
            <div class="xp-footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2021 ISI - Todos los derechos reservados.</p>
                </footer>
            </div>
            <!-- End XP Footerbar -->

        </div>
        <!-- End XP Rightbar -->

    </div>
    <!-- End XP Container -->

    <!-- Start JS -->        
    <script src="{{ secure_asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/detect.js') }}"></script>
    <script src="{{ secure_asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ secure_asset('assets/js/sidebar-menu.js') }}"></script>

    <!-- Chartist Chart JS -->
    <script src="{{ secure_asset('assets/plugins/chartist-js/chartist.min.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>

    <!-- To Do List JS -->
    <script src="{{ secure_asset('assets/js/init/to-do-list-init.js') }}"></script>

    <!-- Datepicker JS -->
    <script src="{{ secure_asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>

    <!-- Dashboard JS -->
    <script src="{{ secure_asset('assets/js/init/dashborad.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ secure_asset('assets/js/main.js') }}"></script>
    <!-- End JS -->    

    @yield('js')

</body>
</html>
