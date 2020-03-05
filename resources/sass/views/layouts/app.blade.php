<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Keep Mind') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/Complete Register.css')}}">
    <link rel="stylesheet" href="{{asset('css/Courses-Info.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/Header-Blue.css')}}">
    <link rel="stylesheet" href="{{asset('css/survey.css')}}">
    <link rel="stylesheet" href="{{asset('css/video.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animated.css')}}">
</head>
<body>
<div id="app">
             @include('include.nav')
            @include('include.messages')
            @yield('content')
             @include('include.footer')
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/animate-navbar.js')}}"></script>
<script src="{{asset('js/bs-animation.js')}}"></script>

<script src="{{asset('js/formWizardScript.js')}}"></script>
<script src="{{asset('js/jquery.formtowizard.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/MultiStep.min.js')}}"></script>
<script src="{{asset('js/uploadImage.js')}}"></script>
<script src="{{asset('js/survey.js')}}"></script>
<script src="{{asset('js/SurveyScript.js')}}"></script>
</body>

</html>