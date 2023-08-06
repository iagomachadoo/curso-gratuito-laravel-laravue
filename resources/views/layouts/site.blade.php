<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso Laravel | @yield('title', 'HOME')</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    @section('nav')
        <header>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">User</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
    @show

    <h1>@yield('title-primary', 'Página Home')</h1>

    @yield('content')

    <script src="{{asset('assets/js/script.js')}}"></script>

    @stack('script-user')
    
</body>
</html>