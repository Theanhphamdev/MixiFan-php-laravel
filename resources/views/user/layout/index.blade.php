<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deadline laravel - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon.ico')}}">
    <link href="{{asset('/admin/css/style.css')}}" rel="stylesheet">
</head>
<body class="h-100">
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<div class="authincation h-100 mt-5">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="/"><img src="{{asset('logo512.png')}}" alt=""></a>
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('/admin/vendor/global/global.min.js')}}"></script>
<script src="{{asset('/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('/admin/js/custom.min.js')}}"></script>
<script src="{{asset('/admin/js/dlabnav-init.js')}}"></script>
</body>
</html>
