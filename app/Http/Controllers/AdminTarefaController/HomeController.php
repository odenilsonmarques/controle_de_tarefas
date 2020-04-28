<?php
//foi implemenado nesta rota a pasta AdminTarefaControllerHome, e dentro dele foi inserido o controller HomeController.
namespace App\Http\Controllers\AdminTarefaController;

//importando a classe controller
use App\Http\Controllers\Controller;

//importanto o model a ser usado nesse controller
use App\Tarefa;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     //nota 1: sempre que o usuario logar ele vai ser redirecionado para algumas view, essa configuração está no arquivo RedirectIfAuthenticate que está dentro da pasta middleware
    //nota 2: esta rota procura o arquivo authenticate que está dentro da pasta middleware, para mandar o usuario para o form de login.
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('AdminTarefaViews.home');
    } 
     //este metodo é reponsavel por chamar a view index do sistema
     public function home(){

        //contagem de tarefas cadastradas
        $TotalTarefa = Tarefa::count();

        //tarefas pendentes
        $TarefasPendentes = Tarefa::where('status_tarefa', '=', 'Pendente')->count();

        //tarefas concluidas
        $TarefasConcluídas = Tarefa::where('status_tarefa', '=', 'Concluída')->count();

        //tarefas em desenvolvimento
        $TarefasEmDesenvolvimento = Tarefa::where('status_tarefa', '=', 'Em Desenvolvimento')->count();

        return view('AdminTarefaViews.home',[
        'TotalTarefa'=>$TotalTarefa,
        'TarefasPendentes'=>$TarefasPendentes,
        'TarefasConcluídas'=>$TarefasConcluídas,
        'TarefasEmDesenvolvimento'=>$TarefasEmDesenvolvimento
        
        ]);        
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
}
