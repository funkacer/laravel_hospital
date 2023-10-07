<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nemocnice - pacienti</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class = 'container'>
                <h1>Webové stránky nemocnice</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eveniet sequi ea ullam veritatis placeat laudantium deserunt sint odit. Optio dolorum illum at corporis quam nesciunt fugiat eaque aspernatur doloribus!</p>

                <h2>Pacienti jsou:</h2>

                <ul>
                    @foreach ($patients as $patient)
                        <li>{{$patient->firstname}} {{$patient->surname}}, {{$patient->age}} let</li>
                    @endforeach
                </ul>

            </div>
        </div>
    </body>
</html>
