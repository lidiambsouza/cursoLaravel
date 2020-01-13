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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos',function(){
    return view('outras.produtos');
})->name('produtos');

Route::get('departamentos',function(){
    return view('outras.departamentos');
})->name('departamentos');

Route::get('nome','MeuControlador@getNome');
Route::get('idade','MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}','MeuControlador@multiplicar');


Route::resource('clientes', 'ClienteControlador');





/*
Modulo sobre rotas.... comentado para n atrapalahar o proximo modulo
*
*
*
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
    })->name('app'); 

    Route::get('/user', function () {
        return view('user');
    })->name('app_user');  

    Route::get('/profile', function () {
        return view('profile');
    })->name('app_profile');  
});

Route::get('/produtos', function(){
    echo "<h1>produtos</h1>";
})->name('meusprodutos');

Route::redirect('todosprodutos', 'produtos', 301);

Route::get('todosprodutos2', function(){

    return redirect()->route('meusprodutos');

});


/////////////////////////////////////////////////////////////////


Route:: post('requisicoes', function(Request $request){
    return 'hello post';
});

Route:: delete('requisicoes', function(Request $request){
    return 'hello delete';
});

Route:: put('requisicoes', function(Request $request){
    return 'hello put';
});

Route:: patch('requisicoes', function(Request $request){
    return 'hello patch';
});

Route:: options('requisicoes', function(Request $request){
    return 'hello options';
});

Route:: get('requisicoes', function(Request $request){
    return 'hello get';
});*/