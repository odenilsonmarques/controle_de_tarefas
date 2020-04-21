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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('tarefa')->group(function(){
   
    //1ª rotas feitas durante o desenvolvimento desse sistema
    Route::get('list','AdminTarefaController\TarefaController@list')->name('list');

    Route::get('add','AdminTarefaController\TarefaController@add')->name('add');

    Route::post('add','AdminTarefaController\TarefaController@addAction');

    Route::get('edit/{id_tarefas}','AdminTarefaController\TarefaController@edit')->name('edit');

    Route::post('edit/{id_tarefas}','AdminTarefaController\TarefaController@editAction');

    Route::get('delete/{id_tarefas}','AdminTarefaController\TarefaController@del')->name('del');

    Route::fallback(function(){
        return view('AdminTarefaViews\404');
    });

});