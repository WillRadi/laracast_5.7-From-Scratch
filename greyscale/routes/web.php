<?php

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

Route::resource('bands', 'BandsController');

// Route::get('/', 'PageController@index');

// Route::post('/', 'SkillController@store');
// Route::get('/skills/{skill}/description', 'SkillController@viewSkill');
// Route::get('/skills/create', 'SkillController@create');