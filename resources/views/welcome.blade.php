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
        <header class="bg-gray-700 pl-2 pr-2 flex">
            <div class="flex pl-2 pr-2 ml-2 pt-2 pb-2 text-white items-center">
                AVpraser
            </div>
            <ul class="flex flex-wrap">
                <li class="flex pl-2 pr-2 ml-2 pt-2 pb-2 text-white items-center">
                    <a href="/">Home</a>    
                </li> 
            </ul>       
        </header>
        <div class="car_brands pl-2 pr-2">
            <ul class="flex flex-wrap">
                @foreach($cars_brands as $car_drand)
                    <li class="flex pl-2 pr-2 mt-2 ml-2 bg-white items-center rounded shadow">
                        <a href="{{ route('brand', $car_drand['name']) }}" class="font-semibold capitalize">{{$car_drand['name']}}</a>
                        <span class="ml-2  text-sm">{{$car_drand['cars_count']}}</span>
                    </li>
                @endforeach
            </ul>       
        </div>
        <main class="ml-4 mr-4 mt-4">
            @yield('content')
        </main>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  
</html>
