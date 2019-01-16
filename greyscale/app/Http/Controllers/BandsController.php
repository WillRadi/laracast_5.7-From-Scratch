<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;

class BandsController extends Controller
{
    /**
     * Restringe acessos
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Helper auth()
         * 
         * auth()->id() = 4
         * auth()->user() = instância atual de User
         * auth()->check() = Booleano (está ou não logado)
         * if(auth()->guest())
         */
        
        // $bands = Band::all();
        $bands = Band::where('owner_id', auth()->id())->get();


        return view('bands.index', compact('bands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'name'      => ['required'],
            'genre'     => ['required'],
            'main_song' => ['required']
        ]);

        Band::create($requestData + ['owner_id' => auth()->id()]);

        return redirect('/bands');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {
        // authorize('nomeDoMetodoNaPolicy', banda em questão)
        // $this->authorize('update', $band);

        /**
         * Outras maneiras de fazer a autorização:
         * 
         * abort_if()
         * abort_unless()
         * 
         * Gate facede:
         * \Gate::allows ou \Gate::denies()
         * if (\Gate::denies('update', $band)) {
         *  abort(403);
         * }
         */

        

        return view('bands.show', compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        return view('bands.edit', compact('band'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Band $band)
    {
        $requestData = $request->validate([
            'name'      => ['required'],
            'genre'     => ['required'],
            'main_song' => ['required']
        ]);
        
        $band->update($requestData);

        return redirect('/bands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
        $band->delete();

        return redirect('/bands');
    }
}
