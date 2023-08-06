@extends('layouts.site')

@section('title', 'Usuário')

@section('nav')
    <header>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">User</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">User</a></li>
                </ul>
            </nav>
        </header>
@endsection

@section('title-primary', 'Página do Usuário')

@section('content')
    
    <ul>
        <li>{{$user->id}}</li>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
    </ul>

@endsection

