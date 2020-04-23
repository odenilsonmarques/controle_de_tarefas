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


//1ª rota feitas durante o desenvolvimento desse sistema
Route::get('/','AdminTarefaController\HomeController@home')->name('home');

Route::prefix('tarefa')->group(function(){

    //as rotas abaixo foram as primeiras a serem criada durante o desenvolvimento do projeto
    Route::get('list','AdminTarefaController\TarefaController@list')->name('list');

    Route::get('add','AdminTarefaController\TarefaController@add')->name('add');

    Route::post('add','AdminTarefaController\TarefaController@addAction');

    Route::get('edit/{id_tarefas}','AdminTarefaController\TarefaController@edit')->name('edit');

    Route::post('edit/{id_tarefas}','AdminTarefaController\TarefaController@editAction');

    Route::get('delete/{id_tarefas}','AdminTarefaController\TarefaController@del')->name('del');

    //as rotas abaixo foram as segundas a serem criada durante o desenvolvimento do projeto
    Route::get('register','Auth\RegisterController@index')->name('register');
    Route::post('register','Auth\RegisterController@register');

    ///as rotas abaixo foram as terceiras a serem criada durante o desenvolvimento do projeto
    Route::get('login','Auth\LoginController@index')->name('login');
    Route::post('login','Auth\LoginController@authenticate');

    Route::post('logout','Auth\LoginController@logout')->name('logout');
    
    Route::fallback(function(){
        return view('AdminTarefaViews\404');
    });

});