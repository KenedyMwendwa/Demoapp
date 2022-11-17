<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Guitar;
use Illuminate\Http\Request;
use App\Models\Guitars;

class GuitarsController extends Controller
{
    public static function getData(){
        return [
            ['id' =>1, 'name'=>'American Volkswagen', 'brand'=>'Toyota'],
            ['id' =>2, 'name'=>'German Machine', 'brand'=>'Mercedez'],
            ['id' =>3, 'name'=>'English Premio', 'brand'=>'Buggati'],
            ['id' =>4, 'name'=>'Old School', 'brand'=>'Ferrari']
        ];

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET >>>> Showing all the available guitars

        return view('guitars.index', [
            'guitars'=> Guitars::all(),
            'userInput'=> '<script>alert("hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GET
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST
        $guitar = new Guitar();

        $guitar->name = $request->input('guitar-name');
        $guitar->brand = $request->input('brand');
        $guitar->year_made = $request->input('year');

        $guitar->save();

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($guitar)
    {
        //GET
        $guitars= self::getData();
        $index = array_search($guitar, array_column($guitars, 'id'));

        if($index===false){
            abort(404);
        }

        return view ('guitars.show', [
            'guitar' => $guitars[$index]
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
        //GET
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
        //POST
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE
    }
}
