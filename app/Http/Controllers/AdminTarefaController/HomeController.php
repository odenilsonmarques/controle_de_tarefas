<?php
//foi implemenado nesta rota a pasta AdminTarefaControllerHome, e dentro dele foi inserido o controller HomeController.
namespace App\Http\Controllers\AdminTarefaController;

//importando a classe controller
use App\Http\Controllers\Controller;

//importanto o model a ser usado nesse controller
use App\Funcionalidade;

//importanto o model a ser usado nesse controller
use App\Projeto;

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
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return view('AdminTarefaViews.index');
    } 
    
    //este metodo é reponsavel por chamar a view home do sistema
    public function home(){

        //contagem de projetos cadastradas
        $totalProjetos = Projeto::count();

        //projetos concluído
        $projetosConcluídos = Projeto::where('status_projeto', '=', 'Concluído')->count();

         //projetos pendentes
         $projetosPendentes = Projeto::where('status_projeto', '=', 'Pendente')->count();

        //projetos desenvolvimento
        $projetosEmDesenvolvimento = Projeto::where('status_projeto', '=', 'Em Desenvolvimento')->count();


        //contagem de tarefas cadastradas
        $totalFuncionalidades = Funcionalidade::count();

        //funcionalidade pendentes
        $funcionalidadesPendentes = Funcionalidade::where('status_funcionalidade', '=', 'Pendente')->count();

        //funcionalidade concluidas
        $funcionalidadesConcluídas = Funcionalidade::where('status_funcionalidade', '=', 'Concluída')->count();

        //funcionalidade em desenvolvimento
        $funcionalidadesEmDesenvolvimento = Funcionalidade::where('status_funcionalidade', '=', 'Em Desenvolvimento')->count();

        return view('AdminTarefaViews.home',[
        'totalFuncionalidades'=>$totalFuncionalidades,
        'funcionalidadesPendentes'=>$funcionalidadesPendentes,
        'funcionalidadesConcluídas'=>$funcionalidadesConcluídas,
        'funcionalidadesEmDesenvolvimento'=>$funcionalidadesEmDesenvolvimento,

        'totalProjetos'=>$totalProjetos,
        'projetosConcluídos'=>$projetosConcluídos,
        'projetosPendentes'=>$projetosPendentes,
        'projetosEmDesenvolvimento'=>$projetosEmDesenvolvimento,
        
        ]);        
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
}
