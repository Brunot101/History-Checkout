<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', [EventController::class,'index']) ->name('home');




Route::post('/login',[LoginController::class,'auth']);




Route::get('/cadastrar',[LoginController::class, 'cadastrar1']);
Route::post('/status',[LoginController::class, 'status'])->name('status');
Route::post('/solicitados',[LoginController::class, 'queryHistory'])->name('queryHistory');


Route::post('/cadastrar',[LoginController::class, 'criar'])->name('cadastrar.criar');
Route::put('/login/perfil/atualizar',[LoginController::class, 'atualizar'])->name('auth.atualizar');
Route::put('/login/solicitados/edit/{id}',[LoginController::class, 'editar_historico'])->name('auth.editar_historico');
Route::post('/login/cadastrar',[LoginController::class, 'cadastrar_historico'])->name('auth.cadastrar');
Route::delete('/login/solicitados/solicitados/{id}',[LoginController::class, 'deletar_historico'])->name('historico.deletar');


Route::group(['middleware'=>['auth']],function(){

    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('home');
    });
    Route::get('/login', [LoginController::class,'login']);
    Route::get('/login/solicitados', [LoginController::class,'solicitados']);
    Route::get('/login/cadastrar', [LoginController::class,'cadastrar'])->name('auth.cadastrar_historico');
    Route::get('/login/perfil', [LoginController::class,'perfil']);
    Route::get('/login/solicitados/edit/{id}', [LoginController::class,'modal_view'])->name('auth.modal_view');
    Route::get('/login/solicitados/delete/{id}',[LoginController::class, 'modal_delete'])->name('auth.modal_delete');
    
});