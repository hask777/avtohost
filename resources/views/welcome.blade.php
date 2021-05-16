<?php
function transliterate($textcyr = null, $textlat = null) {
    $cyr = array(
    'э',  'ж',  'ч',  'щ',   'ш',  'ю',  'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ъ', 'ь', 'я',
    'Э',  'Ж',  'Ч',  'Щ',   'Ш',  'Ю',  'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ъ', 'Ь', 'Я');
    $lat = array(
    'e',  'zh', 'ch', 'sht', 'sh', 'yu', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'y', 'x', 'q',
    'E',  'Zh', 'Ch', 'Sht', 'Sh', 'Yu', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'c', 'Y', 'X', 'Q');
    if($textcyr) return str_replace($cyr, $lat, $textcyr);
    else if($textlat) return str_replace($lat, $cyr, $textlat);
    else return null;
}

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        {{-- <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet"> --}}
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
                            <a href="{{ route('brand', transliterate($car_drand['name'])) }}" class="font-semibold capitalize">{{$car_drand['name']}}</a>
                            <span class="ml-2  text-sm">{{$car_drand['count']}}</span>
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
    {{-- <script src="{{ secure_asset('js/app.js') }}"></script>
    <script src="{{ secure_asset('js/main.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  
</html>
