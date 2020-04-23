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
    
    
    public function __invoke(){
        return view('AdminTarefaViews.home');
    } 
    

     //este metodo é reponsavel por chamar a view index do sistema
     public function home(){
        $home = Tarefa::all();
        return view('AdminTarefaViews.home',['home'=>$home]);
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
}
