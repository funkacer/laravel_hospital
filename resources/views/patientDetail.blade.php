@extends('layouts.layout')

@section('pageTitle')
    Pacient - detail
@endsection

@section('content')
    <h1>Detaily</h1>
    <p>Jméno: {{$patient->firstname}}</p>
    <p>Příjmení: {{$patient->surname}}</p>
    <p>Věk: {{$patient->age}}</p>
    <p>Stav: 
        @if ($patient->status == 0)
            nula
        @elseif ($patient->status == 1)
            jedna
        @else
            dva
        @endif
    </p>
    <p>Detail: {{$patient->detail}}</p>
@endsection