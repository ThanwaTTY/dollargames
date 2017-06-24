<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 5.4</title>
    <link rel="stylesheet" href="/css/app.css">
    
    <link href="{{ asset('jquery/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('jquery/jquery-ui-timepicker-addon.css') }}" rel="stylesheet">


    <script src="{{ asset('jquery/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-ui-timepicker-addon.js') }}"></script>
    <script src="{{ asset('jquery/jquery-ui-sliderAccess.js') }}"></script>
</head>
<body>
    <div class="container">
        <h3>Dollargames</h3> 
        @include('navbar') 
        @section('content')
        @show 
            <div class="row">
                <div class="col-md-4">
                    {{-- @if(session()->get('massage')) --}}
                    {{-- <div class="alert alert-success" role="alert">
                    <p>{{ session()->get('massage') }}</p> --}}
                    {{-- @section('content')
                    @show --}}
                    </div>
                    {{-- @endif --}}
                </div>
            </div> 
    </div>


</body>
</html>