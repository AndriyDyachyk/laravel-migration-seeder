<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                @foreach($trains as $train)
                <div class="col-12">
                    {{$train->codice_treno}}
                    {{$train->stazione_partenza}}
                    {{$train->data_partenza}}
                    {{$train->orario_partenza}}
                    {{$train->stazione_arrivo}}
                    {{$train->stazione_arrivo}}
                    {{$train->data_arrivo}}
                    {{$train->orario_arrivo}}
                    {{$train->azienda}}
                    {{$train->n_carrozze}}
                    {{$train->in_orario}}
                    {{$train->tempo_ritardo}}
                    {{$train->cancellato}}
                </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>