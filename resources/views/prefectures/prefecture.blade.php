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
        <h1 class='name'>
            {{ $prefecture->name }}
        </h1>
        <p>
        </p>
        <div class='gotouti_mens'>
                <div class='gotouti_men'>
                    @foreach($gotouti_men as $gotouti_mens )
                    <div class='prefecture'>
                        <a href="/gotouti_men/{{ $gotouti_mens->id }}">
                        {{$gotouti_mens->name}}
                        </a>
                    </div>
                     @endforeach   
                    
                </div>
        </div>
    </body>
</html>
</x-app-layout>