<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mixifan Moi - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon.ico')}}">
    <link href="{{asset('/admin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/website/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/style.min.css')}}">
</head>
<body>
@include('website.layout.header')
@yield('content')
@include('website.layout.footer')
@include('website.layout.modal')
<script src="{{asset('/website/js/vendor/vendor.min.js')}}"></script>
<script src="{{asset('/website/js/plugins/plugins.min.js')}}"></script>
<script src="{{asset('/website/js/main.js')}}"></script>
</body>
</html>
