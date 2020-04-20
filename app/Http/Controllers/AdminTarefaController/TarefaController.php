<?php
//foi implemenado nesta rota a pasta AdminTarefaController, pois o controller TarefaController está dentro da pasta AdminTarefaController que está dentro da pasta controller
namespace App\Http\Controllers\AdminTarefaController;

//importando a classe controller
use App\Http\Controllers\Controller;

//importanto o model a ser usado nesse controller
use App\Tarefa;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function list(){
        //$list = Tarefa::all();
        $list = Tarefa::paginate(5);
        return view('AdminTarefaViews.list',['list'=>$list]);
    }

    public function add(){
        return view('AdminTarefaViews.add');
    }

    public function addAction(Request $request){
        $request -> validate([
            'nome_tarefa'=>['required','string','min:5'],
            'data_inicio'=>['required','date'],
            'data_fim'=>['required','date'],
            'status_tarefa'=>['required','string']
        ]);

        $nome_tarefa = $request->input('nome_tarefa');
        $data_inicio = $request->input('data_inicio');
        $data_fim = $request->input('data_fim');
        $status_tarefa = $request->input('status_tarefa');

        $tarefa = new Tarefa();
        $tarefa-> nome_tarefa = $nome_tarefa;
        $tarefa-> data_inicio = $data_inicio;
        $tarefa-> data_fim = $data_fim;
        $tarefa-> status_tarefa = $status_tarefa;

        $tarefa->save();
        return redirect()->route('list');
    }
}
