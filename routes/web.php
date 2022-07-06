<?php

use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){ Aqui vai ser a url que vai ser acessada pelo usuario
    //return view('welcome'); Aqui é o arquivo que vai ser acessado.


    //get (recebe dados)
    //post (manda dados)
    //update (edit)




Route::delete('/users/{id}', [UserController::class,'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class,'update'])->name('users.update');
Route::get('/users/{id}/editar', [UserController::class,'edit'])->name('users.edit');
Route::get('/registrar', [UserController::class,'create'])->name('users.create');
Route::get('/usuarios', [UserController::class,'index'])->name('users.userslist');
Route::post('/usuarios', [UserController::class,'store'])->name('users.store');
Route::get('/usuarios/{id}', [UserController::class,'show'])->name('users.show');

Route::get('/', function(){
    return view('welcome');
});

Route::get('/esportes', function(){
    return view('sports');
});

Route::get('/cliente', function(){
    return view('welcome');
});




//[UserController::class,'index'] Ele acessa a função no controlador selecionado (UserController)- 'oq vai ser acesasdo'


