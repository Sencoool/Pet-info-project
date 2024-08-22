<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',"Pet | ระบบจัดการสัตว์เลี้ยง")</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css')}}">
    <script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('js/jquery-3.7.1.min.js')}}">
    <script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('vendor/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">

    <div class="container">
        <div class="navbar-collapse collapse" id="navbar"></div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('pet')}}">หน้าแรก</a></li>
            <li><a href="{{ URL::to('pet')}}">ข้อมูลสัตว์เลี้ยง</a></li>
        </ul>
    </div>
    <center><strong><h1>นายจิรเมธ สกุลกิจถาวร 6506021610037</h1></strong></center>
</nav>@yield('content')
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
@if(session('msg'))
@if(session('ok'))
<script>toastr.success("{{ session('msg') }}")</script>
@else
<script>toastr.error("{{ session('msg') }}")</script>
@endif
@endif
</body>
</html>