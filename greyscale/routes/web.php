<?php

Route::get('/', 'PageController@index');

Route::post('/', 'SkillController@store');
Route::get('/skills/{skill}/description', 'SkillController@viewSkill');
Route::get('/skills/create', 'SkillController@create');