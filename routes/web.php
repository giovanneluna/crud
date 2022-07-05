<?php

use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){ Aqui vai ser a url que vai ser acessada pelo usuario
    //return view('welcome'); Aqui é o arquivo que vai ser acessado.


    //get (recebe dados)
    //post (manda dados)



Route::get('/registrar', [UserController::class,'create'])->name('users.create');   
Route::get('/cliente', [UserController::class,'index'])->name('users.clientarea');
Route::post('/cliente', [UserController::class,'store'])->name('users.store');   
Route::get('/cliente/{id}', [UserController::class,'show'])->name('users.show');

Route::get('/', function(){
    return view('welcome');
});

Route::get('/esportes', function(){
    return view('sports');
});



//[UserController::class,'index'] Ele acessa a função no controlador selecionado (UserController)- 'oq vai ser acesasdo'


    