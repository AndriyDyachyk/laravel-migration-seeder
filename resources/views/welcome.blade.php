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
            <div class="row justify-content-around">
                <div class="col-3 d-flex">
                    <a href="/" class="align-self-center">
                        <button >Quelli di oggi</button>
                    </a>
                </div>
                <div class="col-5 ">
                    <form action="/filtrato" method="GET" class="d-flex">
                        @csrf
                        <label for="data_partenza" class="">Selezionare data partenza:</label>
                        <input class="form-control" type="date" value="chosenDate" name="chosenDate"/>
                        <button type="submit" class="btn btn-primary">filtra</button>
                    </form>
                </div>
            </div>
            <div class="row">
                @foreach($trains as $train)
                <div class="col-12 mb-5" >
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between"><span>{{$train->codice_treno}}</span> <span>Azienda: {{$train->azienda}}</span> <span>Carrozze: {{$train->n_carrozze}}</span></li>
                        <div class="row">
                            <div class="col">
                                Stazione di partenza: {{$train->stazione_partenza}}<br>
                                Data di partenza: {{$train->data_partenza}}<br>
                                Orario di partenza: {{date('h:i', strtotime($train->orario_partenza))}}
                            </div>
                            <div class="col">
                                Stazione di arrivo: {{$train->stazione_arrivo}}<br>
                                Data di arrivo: {{$train->data_arrivo}}<br>
                                Orario di arrivo: {{date('h:i', strtotime($train->orario_arrivo))}}
                            </div>
                        </div>
                        <li>
                            @if($train->in_orario == 1)
                                Il treno è in orario
                            @elseif($train->in_orario == 0 && $train->cancellato == 0)
                                Il treno è in ritardo di {{date('i', strtotime($train->tempo_ritardo))}} minuti
                            @endif
                            @if($train->cancellato == 1)
                                Il treno è stato cancellato
                            @else
                            @endif
                        </li>
                    </ul>
                    <hr>
                </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>