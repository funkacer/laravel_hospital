@extends('layouts.layout')

@section('pageTitle')
    Domovská stránka Nemocnice
@endsection

@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class = 'container'>
        <!--<h1>Webové stránky nemocnice</h1>-->
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eveniet sequi ea ullam veritatis placeat laudantium deserunt sint odit. Optio dolorum illum at corporis quam nesciunt fugiat eaque aspernatur doloribus!</p>

        <h2>Vítejte {{$name}}</h2>

        <p>Váš věk je {{$age}} let.</p>

        <ul>
            @foreach ($appointments as $appointment)
                <li>{{$appointment}}</li>
            @endforeach
        </ul>
        <p>
            Stav pacienta:
            @if ($status == 'zdravy')
                Jste zdravý jako ryba!
            @elseif ($status == 'nemocny')
                Jste nemocný, ihned jeďte do nemocnice!
            @else
                Bohužel jste mrtev.
            @endif
        </p>
        <div class="links">
            <ul>
                <li>First</li>
                <li>Second</li>
                <!--<li><a href="kontakty">Kontakty</a></li>-->
                <li><a href="{{ route('contactRoute') }}">Kontakty</a></li>
                <li><a href="{{ route('patientsRoute') }}">Pacienti</a></li>
            </ul>
        </div>

    </div>
@endsection