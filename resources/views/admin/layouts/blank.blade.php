<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') - {{get_setting('title')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{get_setting('description')}}" name="description" />
    <meta content="Jayflash" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{static_asset('user/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{static_asset('user/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{static_asset('user/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{static_asset('user/css/snackbar.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{static_asset('user/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('styles')

</head>

<body data-sidebar="dark">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                {{-- <div class="col-md-8 col-lg-6 col-xl-5"> --}}
                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="{{route('index')}}" class="auth-logo">
                                <img src="{{my_asset(get_setting('logo'))}}" height="30" class="logo-dark mx-auto"
                                    alt="">
                                <img src="{{my_asset(get_setting('logo'))}}" height="30" class="logo-light mx-auto"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    @yield('content')
                {{-- </div> --}}
            </div>

            {{-- Footer --}}
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            ©
                            <script>document.write(new Date().getFullYear())</script> {{get_setting('title')}}
                            {{-- <span class="d-none d-sm-inline-block"> -Crafted with <i class="mdi mdi-heart text-danger"></i> by Jadesdev.</span> --}}
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>


    <!-- JAVASCRIPT -->
    <script src="{{static_asset('user/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{static_asset('user/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{static_asset('user/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{static_asset('user/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{static_asset('user/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{static_asset('user/js/snackbar.min.js')}}"></script>
    <script src="{{static_asset('user/js/app.js')}}"></script>
    @yield('scripts')

    <script type="text/javascript">
        @if(Session::get('success'))
        Snackbar.show({
          text: '{{Session::get('success')}}',
          pos: 'top-right',
          backgroundColor: '#38c172'
        });
        @endif
        @if(count($errors) > 0)
        Snackbar.show({
          @foreach($errors->all() as $error)
          text: '{{$error}}',
              @endforeach
          pos: 'top-right',
          backgroundColor: '#e3342f'
        });
        @endif
        @if(Session::get('error'))
        Snackbar.show({
          text: '{{Session::get('error')}}',
          pos: 'top-right',
          backgroundColor: '#e3342f'
        });
        @endif
    </script>
</body>
</html>
