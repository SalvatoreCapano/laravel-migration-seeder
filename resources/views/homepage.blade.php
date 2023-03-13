<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Migration Seeder</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/js/app.js')
</head>

<body class="antialiased">
    {{-- {{ dd($trains) }} --}}
    <div class="container">
        <h1 class="text-center fw-bold">Treni in partenza oggi</h1>

        <div class="cardContainer row">
            {{-- {{ dd($trains) }} --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Da..</th>
                        <th scope="col">..A</th>
                        <th scope="col">Data di partenza</th>
                        <th scope="col">Ora di partenza</th>
                        <th scope="col">Ora di arrivo</th>
                        <th scope="col">Treno n.</th>
                        <th scope="col">In orario</th>
                        <th scope="col">Cancellato</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($trains as $train)
                        <tr>

                            <td>{{ $train['company'] }}</td>
                            <td>{{ $train['departure_station'] }}</td>
                            <td>{{ $train['arrival_station'] }}</td>
                            <td>{{ $train['departure_date'] }}</td>
                            <td>{{ $train['departure_time'] }}</td>
                            <td>{{ $train['arrival_time'] }}</td>
                            <td>{{ $train['train_code'] }}</td>
                            <td>{{ $train['is_on_time'] ? 'SI' : 'NO'}}</td>
                            <td>{{ $train['is_canceled'] ? 'SI' : 'NO'}}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
