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
            {{ $gotouti_men->prefecture->name }}
        </h1>
        <div class='gotouti_mens'>
                <div class='gotouti_men'>
                    <p>
                        {{ $gotouti_men->name }}
                    </p>
                    <p>
                        {{ $gotouti_men->origin }}
                    </p>
                </div>
        </div>
        <script src="{{asset('/js/like.js')}}"></script>
            @if ($liked_gotouti_men_lists->contains($gotouti_men->id))
                        <div class="flex">
                            <form action={{"/unlike/" . $gotouti_men->id}} method="POST" class="border-red-500">
                                @csrf
                                <button type="submit">いいね解除</button>
                            </form>
                        </div>
                    @else
                        <div class="flex">
                            <form action={{"/like/" . $gotouti_men->id}} method="POST" class="border-red-500">
                                @csrf
                                <button type="submit">いいね</button>
                            </form>
                        </div>
                    @endif
    </body>
</html>
</x-app-layout>