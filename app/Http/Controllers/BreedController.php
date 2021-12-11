<?php

namespace App\Http\Controllers;

use App\Models\Breed as ModelsBreed;
use App\Models\Client;
use Illuminate\Http\Request;


class BreedController extends Controller

{
    public function __construct(Client $client)
    {
        $this->client = $client;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $breeds=ModelsBreed::all();
        $breeds=ModelsBreed::paginate(5);
        
        return view('breed.index')->with('breeds', $breeds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=$this->client
                 ->orderBy('name', 'ASC')->get();
        return view('breed.create', ['clients'=>$clients]);
       
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $b = new ModelsBreed();
        $b->name = $request->input('name');
        $b->clients_id = $request->input('clients_id');
        $b->type = $request->input('type');
        $b-> race= $request->input('race');
        $b->size = $request->input('size');
        $b->genre = $request->input('genre');
        $b->save();
        return redirect(route('breed.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $breeds = ModelsBreed::find($id);
        $client=Client::where('id', $breeds->clients_id)->first()->toArray();
        if($breeds){
            return view('breed.show',['breeds'=> $breeds, 'client'=> $client]);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $breeds = ModelsBreed::find($id);        
        return view('breed.edit')->with('breeds', $breeds);
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
        $breeds = ModelsBreed::find($id);
        $breeds->name = $request->input('name');
        $breeds->clients_id = $request->input('clients_id');
        $breeds->type = $request->input('type');
        $breeds->race = $request->input('race');
        $breeds->size = $request->input('size');
        $breeds->genre = $request->input('genre');
        
        $breeds->save();
        return redirect(route('breed.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $breeds = ModelsBreed::find($id);
        $breeds->delete();
        return redirect(route('breed.index'));
    }
}
