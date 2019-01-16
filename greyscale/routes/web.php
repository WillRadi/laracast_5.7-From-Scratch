<?php

use App\Contract;
use App\Services\Twitter;

/**
 * 
 * 7 métodos principais:
 * 
 * GET /projects            @(index)     - Mostrar todos
 * GET /projects/create     @(create)    - Formulário para criação
 * GET /projects/{id}       @(show)      - View de um projeto
 * POST /projects           @(store)     - Faz a persistência no banco
 * GET /projects/{id}/edit  @(edit)      - Formulário de edição
 * PATCH /projects/{id}     @(update)    - Persiste a edição no banco
 * DELETE /projects/{id}    @(destroy)   - Deleta do banco
 * 
 */
Route::get('/', function () {
    // dd(app(Twitter::class));
    return redirect('/bands');
});

Route::resource('bands', 'BandsController');

Route::patch('songs/{song}', 'SongsController@update');

Route::post('bands/{band}/song', 'SongsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
