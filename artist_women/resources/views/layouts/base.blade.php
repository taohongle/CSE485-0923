<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    {{-- Header --}}
    @include ('layouts.header')

    {{-- Main content --}}
    <div class="container my-3">
        @yield('main')
    </div>
    
    {{-- Footer --}}
    
    
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>