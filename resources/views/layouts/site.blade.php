<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso Laravel | @yield('title', 'HOME')</title>
    <style>
        nav > ul{
            list-style-type: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0 40px;
            padding: 20px 40px;
            background: #eee;
        }
    </style>
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

</body>
</html>