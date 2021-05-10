@extends('welcome')
@section('content')

<h1 class="font-bold" id="brand">{{$name}}</h1>

<div class="grid grid-cols-12 gap-4">
    
    <div class="col-span-6">
        <div class="bg-white  p-4">
            <div>
                <canvas id="myChart"></canvas>
              </div>
        </div>
    </div>
   
        <div class="col-span-6">
            @if(!empty($cars_list))
                @foreach($cars_list as $car)    
                    <div class="grid grid-cols-12 gap-2 bg-white p-4 mb-4">
                        
                            <h1 class="col-span-4 font-bold">{{$car['title']}}</h1>
                            <div class="col-span-8">
                                <div class="flex flex-row-reverse font-bold">
                                    <span class="ml-4">Цена USD:{{$car['price_usd']}}</span>
                                    <span class="">Цена RUB: {{$car['price_ru']}}</span>
                                    
                                </div>
                            </div>
                            
                            <div class="col-span-4">
                                <img src="{{$car['image']}}" alt="">
                            </div>

                            <div class="col-span-4">
                                description
                            </div>

                            <div class="col-span-4">
                                <div class="">
                                    <span class="font-bold">
                                        год:
                                    </span>
                                    <span>
                                        {{$car['year']}}
                                    </span>    
                                </div>

                                <div class="">
                                    <span class="font-bold">
                                        обьем:
                                    </span>
                                    <span>
                                        {{$car['volume']}}
                                    </span>  
                                    <span>
                                        л
                                    </span>   
                                </div>

                                <div class="">
                                    <span class="font-bold">
                                        двигатель:
                                    </span>
                                    <span>
                                        {{$car['engine']}}
                                    </span>     
                                </div>

                                <div class="">
                                    <span class="font-bold">
                                        трансмисия:
                                    </span>
                                    <span>
                                        {{$car['transmision']}}
                                    </span>     
                                </div>

                                <div class="">
                                    <span class="font-bold">
                                        пробег:
                                    </span>
                                    <span>
                                        {{$car['miles']}} 
                                    </span>  
                                    <span>
                                        км
                                    </span>   
                                </div>
                    
                            </div>
                            
                    </div>
                @endforeach
            @else
                hoi
            @endif
        </div>
    
    {{-- <div class="col-span-3">
        <div class="bg-white  p-4">
            col3
        </div>   
    </div> --}}
</div>

    
@endsection