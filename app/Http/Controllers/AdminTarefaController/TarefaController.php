<?php
//foi implemenado nesta rota a pasta AdminTarefaControllerHome, e dentro dele foi inserido o controller TarefaController.
namespace App\Http\Controllers\AdminTarefaController;

//importando a classe controller
use App\Http\Controllers\Controller;

//importanto o model a ser usado nesse controller
use App\Tarefa;

use Illuminate\Http\Request;

class TarefaController extends Controller
{

    //esse contrutor, tem como proposito redirecionar o usuario para pagina de login, se este não estiver logado e tentar acessar alguma aera do sistema
    public function __construct(){
        $this->middleware('auth');
    }
    
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

        if($data_inicio > $data_fim){
           return redirect()->route('add')
           ->withErrors('Erro! a data de inicio não pode ser maior do que a data de término')
           ->WithInput();
        }
        $tarefa = new Tarefa();
        $tarefa-> nome_tarefa = $nome_tarefa;
        $tarefa-> data_inicio = $data_inicio;
        $tarefa-> data_fim = $data_fim;
        $tarefa-> status_tarefa = $status_tarefa;
        $tarefa->save();
        return redirect()->route('list');
    }

    public function edit($id_tarefas){
        $data = Tarefa::find($id_tarefas);
        if($data){
            return view('AdminTarefaViews.edit',['data'=>$data]);
        }else{
            return redirect()->route('list');
        }
    }

    public function editAction(Request $request, $id_tarefas){
        $request->validate([
            'nome_tarefa'=>['required','string','min:5'],
            'data_inicio'=>['required','date'],
            'data_fim'=>['required','date'],
            'status_tarefa'=>['required','string']
        ]);
        $nome_tarefa = $request->input('nome_tarefa');
        $data_inicio = $request->input('data_inicio');
        $data_fim = $request->input('data_fim');
        $status_tarefa = $request->input('status_tarefa');

        if($data_inicio > $data_fim){
            return redirect()->route('add')
            ->withErrors('Erro! a data de inicio não pode ser maior do que data a final')
            ->WithInput();
         }
        //para usar o comando abaixo é necessario permitir no arquivo model Tarefa, atraves do comando $fillable, pois é como se estivesse se passando um grande massa de dados. Porem pode ser feito de outra forma
        Tarefa::find($id_tarefas)
        ->update(['nome_tarefa'=>$nome_tarefa,'data_inicio'=>$data_inicio,'data_fim'=>$data_fim,'status_tarefa'=>$status_tarefa]);
        return redirect()->route('list');
    }

    public function del($id_tarefas){
        Tarefa::find($id_tarefas)->delete();
        return redirect()->route('list');
    }
}
