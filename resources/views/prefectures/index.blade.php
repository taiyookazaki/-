<x-app-layout>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>gotouti map</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Gotouti_map</h1>
        <div class='prefectures'>
            <p>{{ Auth::user()->name }}</p>
            @foreach ($prefectures as $prefecture)
                <div  class="prefecture{{$prefecture->id}} ">
                    <a href="/prefectures/{{ $prefecture->id }}">
                        {{ $prefecture->name }}
                    </a>
                </div>
            @endforeach
        </div>
    </body>
</html>
</x-app-layout>