<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Band;

class SongsController extends Controller
{
    public function update(Request $request, Song $song)
    {
        /**
         * Método HAS verifica se há algum valor em 'played'.
         * Se o método na view estiver desmarcado, ele retorna vazio.
         * Por isso o HAS é necessário.
         */
        
        request()->has('played') ? $song->play() : $song->unplay();
        
        return back();
    }


    public function store(Band $band)
    {
        $validData = request()->validate(['name' => 'required']);

        $band->addSong($validData);

        return back();
    }
}
