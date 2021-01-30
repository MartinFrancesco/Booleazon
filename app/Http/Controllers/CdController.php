<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cd;
use Illuminate\Support\Str;

class CdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cds = Cd::all();
        return view("cds.index", compact("cds"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cds.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        $request->validate([
            'titolo' => 'required | max:255',
            'artista' => 'required | max:255',
            'genere' => 'required | max:255',
            'anno' => 'numeric | between:1500,2050',
            'prezzo' => 'required |  numeric | between:0,1000',   
            'cover' =>    'image'    
        ]);
        $slug = Str::slug('titolo', '-');

        // Salvataggio dati metodo $fillable
        $newCd = new Cd();
        $newCd->fill($data);
        $save = $newCd->save();

        if( $save === true ){
            return redirect()->route('cds.index' );
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $cd = Cd::find($id);
       return view('cds.show', compact('cd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cd = Cd::find($id);
        return view('cds.edit', compact('cd'));
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
