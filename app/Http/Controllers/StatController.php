<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars_brands = Http::get('http://brands-test-fastapi.herokuapp.com/cars-brands')
            ->json()['made'];

        // array_shift($cars_brands);
        // array_pop($cars_brands);
       
        foreach($cars_brands as $car)
        {
            $name = $car['name'];
            $name =  strtolower($name);
            $name = str_replace(" ", "-", $name);

        }

        return $name;
       
    }

    public function getBrand($name)
    {
        $cars_json = Http::get('https://raw.githubusercontent.com/hask777/avpars/main/'.$name.'_stat.json')
        ->json();

        $carray[$name] = $cars_json;
        return $carray;
       
    }

    public function getVol($name)
    {
        $cars_json = Http::get('https://raw.githubusercontent.com/hask777/avpars/main/'.$name.'_vol_stat.json')
        ->json();

        $carray[$name] = $cars_json;
        return $carray;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
