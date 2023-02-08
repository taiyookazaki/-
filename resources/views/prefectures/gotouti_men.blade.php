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
            {{ $gotouti_men->prefecture->name }}
        </h1>
        <div class='gotouti_mens'>
                <div class='gotouti_men'>
                    <p>
                        {{ $gotouti_men->name }}
                    </p>
                    <p >
                        {{ $gotouti_men->origin }}
                    </p>
                </div>
        </div>
    </body>
</html>