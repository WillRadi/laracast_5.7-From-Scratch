<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongsController extends Controller
{
    public function update(Request $request, Song $song)
    {
        // Método HAS vefirifa se há algum valor em 'played'.
        // Se o método na view estiver desmarcado, ele retorna vazio.
        // Por isso o HAS é necessário.
        
        $song->update([
            'played' => request()->has('played')
        ]);

        return back();
    }
}
