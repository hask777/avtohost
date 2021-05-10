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
                            <a href="{{route('brand', $car_drand['name'])}}">{{$car_drand['name']}}</a>
                            <span>{{$car_drand['cars_count']}}</span>
                        </li>
                        {{-- <li class="flex pl-2 pr-2 mt-2 ml-2 bg-white">
                            <a href="{{route('getcar', $car_drand['name'])}}">{{$car_drand['name']}}</a>
                            <span>{{$car_drand['cars_count']}}</span>
                        </li> --}}
                        <form action="">
                            
                        </form>
                    @endforeach
                </ul>       
            </div>
        </header>
        <main class="ml-4 mr-4 mt-4">
            @yield('content')
        </main>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
    
   
       
</html>
