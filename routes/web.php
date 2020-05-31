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

Route::prefix('projfunc')->group(function(){

    //as rotas abaixo foram as primeiras a serem criada durante o desenvolvimento do projeto
    Route::get('listProj','AdminTarefaController\ProjetoController@listProj')->name('listProj');

    Route::get('addProj','AdminTarefaController\ProjetoController@addproj')->name('addProj');

    Route::post('addProj','AdminTarefaController\ProjetoController@addActionProj');

    Route::get('editProj/{id_projetos}','AdminTarefaController\ProjetoController@editProj')->name('editProj');

    Route::post('editProj/{id_projetos}','AdminTarefaController\ProjetoController@editActionProj');

    Route::get('deleteProj/{id_projetos}','AdminTarefaController\ProjetoController@delProj')->name('delProj');

    Route::get('listFunc','AdminTarefaController\FuncionalidadeController@listFunc')->name('listFunc');

    Route::get('addFunc','AdminTarefaController\FuncionalidadeController@addFunc')->name('addFunc');

    Route::post('addFunc','AdminTarefaController\FuncionalidadeController@addActionFunc');

    Route::get('editFunc/{id_funcionalidades}','AdminTarefaController\FuncionalidadeController@editFunc')->name('editFunc');

    Route::post('editFunc/{id_funcionalidades}','AdminTarefaController\FuncionalidadeController@editActionFunc');

    Route::get('deleteFunc/{id_funcionalidades}','AdminTarefaController\FuncionalidadeController@delFunc')->name('delFunc');

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