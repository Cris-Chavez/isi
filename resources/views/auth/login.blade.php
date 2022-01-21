<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Prueba Técnica para Empressa ISI">
    <meta name="keywords" content="admin, admin template, admin panel, dashboard template, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Prueba Técnica para Empressa ISI</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ secure_asset('assets/images/isi-ico.ico') }}">

    <!-- Start CSS -->
    <link href="{{ secure_asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End CSS -->

</head>

<body class="xp-vertical">

    <div class="xp-authenticate-bg"></div>
    <!-- Start XP Container -->
    <div id="xp-container" class="xp-container">

        <!-- Start Container -->
        <div class="container">

            <!-- Start XP Row -->
            <div class="row vh-100 align-items-center">
                <!-- Start XP Col -->
                <div class="col-lg-12 ">

                    <!-- Start XP Auth Box -->
                    <div class="xp-auth-box">

                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center mt-0 m-b-15">
                                    <a href="" class="xp-web-logo"><img src="assets/images/isi.jpg" height="80" alt="logo"></a>
                                </h3>
                                <div class="p-3">
                                    <form action="{{ route('login') }}" method="POST"> 
                                        @csrf                                       
                                        
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>                         
                                      <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">Ingresar</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End XP Auth Box -->

                </div>
                <!-- End XP Col -->
            </div>
            <!-- End XP Row -->
        </div>
        <!-- End Container -->
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

    <!-- Main JS -->
    <script src="{{ secure_secure_asset('assets/js/main.js') }}"></script>
    <!-- End JS -->

</body>
</html>