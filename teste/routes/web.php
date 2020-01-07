<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/teste/{nome}/{sobrenome}', function($nome, $sobre) {
    echo "ola ".$nome." bem vindo, $sobre !";
});


Route::get ('/seunome/{nome?}', function($nome=null) {
    if(isset($nome))
        return "ola ".$nome." bem vindo!";    
     return "não digitou nome";
    
    
});

Route::get ('/rotacomregra/{nome}/{n}', function($nome,$n) {
    for ($i=0; $i<$n;$i++)
    echo "ola, $nome !";
    
    
})->where ('nome', '[A-Za-z]+')
->where('n', '[0-9]+');

Route::prefix ('/app')->group(function() {
    Route::get('/', function () {
        return  view('app');
    });   
    Route::get('/user', function () {
        return view('user');
    }); 
    Route::get('/profile', function () {
        return view('profile');
    }); 
});