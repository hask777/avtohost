<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the cars brands names from github
        // $cars_brands = Http::get('https://raw.githubusercontent.com/hask777/avpars/main/brands.json')
        //     ->json();

        $cars_brands = Http::get('http://brands-test-fastapi.herokuapp.com')
            ->json();
        // dd($cars_brands);

        // Remove first and last items
        // array_shift($cars_brands);
        // array_pop($cars_brands);

        // dd($cars_brands);

        return view('welcome', [
            'cars_brands' => $cars_brands
        ]);
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
    public function show($name)
    {
        $name =  strtolower($name);
        $name = str_replace(" ", "-", $name);
        // dump($name);
        // Get the cars brands names from github
        $brand_cars = Http::get('https://raw.githubusercontent.com/hask777/avpars/main/'.$name.'.json')
            ->json();

        $cars_brands = Http::get('http://brands-test-fastapi.herokuapp.com/')
            ->json();
        // Remove first and last items
        // dump($brand_cars);
        // array_shift($cars_brands);
        // array_pop($cars_brands);

        // dump($brand_cars);
        return view('brand', [
            'name' => $name,
            'cars_list' => $brand_cars,
            'cars_brands' => $cars_brands
        ]);
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
