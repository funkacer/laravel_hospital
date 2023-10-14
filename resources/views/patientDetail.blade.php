<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail pacienta</title>
</head>
<body>
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
</body>
</html>