<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-300">
        <header class="pl-2 pr-2">
            <div class="car_brands">
                <ul class="flex flex-wrap">
                    @foreach($cars_brands as $car_drand)
                        <li class="flex pl-2 pr-2 mt-2 ml-2 bg-white">
                            <a href="/{{$car_drand['name']}}">{{$car_drand['name']}}</a>
                            <span>{{$car_drand['cars_count']}}</span>
                        </li>
                    @endforeach
                </ul>       
            </div>
        </header>
    </body>
</html>