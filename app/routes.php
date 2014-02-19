<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// polygot test
Route::get('test', function () {

    $p = new Article;
    $p->title = 'foo';
    $p->content = 'bar';

    $res = $p->save();

    var_dump($res);
    var_dump($p->id);
});

