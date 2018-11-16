<?php

Route::get('/', 'PageController@index');

Route::get('/skills/{skill}', 'PageController@viewSkill');