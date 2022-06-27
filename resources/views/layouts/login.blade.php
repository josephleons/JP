<!DOCTYPE html>
<html lang="{{'confi-langate'}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('bootstrap-icons/bootstrap-icons.svg')}}">
    {{-- Boot v5 --}}
    {{--
    <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="{{url('bootstrap/dist/js/bootstrap.min.js')}}">
    {{-- icons --}}
    {{--
    <link rel="stylesheet" href="{{url('assets/css/all.css')}}"> --}}

    {{-- custom style cssclear --}}
    <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
    {{-- Bootstrap 4 --}}
    <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.css')}}">
    <title>{{config('app.name','JOBSEK')}}</title>
</head>

<body style="background-color:#2E3C51">
    @include('inc.login')
    <div class="container-fluid">
        {{-- @include('inc.messages') --}}
        @yield('content')
    </div>