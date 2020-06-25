<?php
//foi implemenado nesta rota a pasta AdminTarefaControllerHome, e dentro dele foi inserido o controller FuncionalidadeController.
namespace App\Http\Controllers\AdminTarefaController;

//importando a classe controller
use App\Http\Controllers\Controller;

//importanto o model a ser usado nesse controller
use App\Funcionalidade;

//importanto o model a ser usado nesse controller
use App\Projeto;

use Illuminate\Http\Request;

class FuncionalidadeController extends Controller
{
    //esse contrutor, tem como proposito redirecionar o usuario para pagina de login, se este não estiver logado e tentar acessar alguma aera do sistema
   
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function listFunc($projeto_id){

        //$projeto = Funcionalidade::with('projeto')->get();
        //$listFunc = Funcionalidade::where('id_funcionalidades')->paginate(5);
        //$listFunc = Funcionalidade::paginate(5);
        //$listFunc = Funcionalidade::find($projeto_id)->get();
        $listFunc = Funcionalidade::where('projeto_id', $projeto_id)->get();
        return view('AdminTarefaViews.listFunc',['listFunc'=>$listFunc]);
    }
    public function addFunc(){
        //a classe abaixo foi importada devido o relacionamento n:m 
        $projeto = Projeto::all();
        return view('AdminTarefaViews.addFunc',['projeto'=>$projeto]);
        //return view('AdminTarefaViews.add');
    }
    public function addActionFunc(Request $request){
        $request -> validate([
            'nome_funcionalidade'=>['required','string','min:5'],
            'data_inicio'=>['required','date'],
            'data_fim'=>['required','date'],
            'status_funcionalidade'=>['required','string'],
            'projeto_id'=>['required','int']
        ]);
        $nome_funcionalidade = $request->input('nome_funcionalidade');
        $data_inicio = $request->input('data_inicio');
        $data_fim = $request->input('data_fim');
        $status_funcionalidade = $request->input('status_funcionalidade');
        $projeto_id = $request->input('projeto_id');
        if($data_inicio > $data_fim){
           return redirect()->route('addFunc')
           ->withErrors('Erro! a data de inicio não pode ser maior do que a data do término')
           ->WithInput();
        }
        $funcionalidade = new Funcionalidade();
        $funcionalidade-> nome_funcionalidade = $nome_funcionalidade;
        $funcionalidade-> data_inicio = $data_inicio;
        $funcionalidade-> data_fim = $data_fim;
        $funcionalidade-> status_funcionalidade = $status_funcionalidade;
        $funcionalidade-> projeto_id = $projeto_id;

        $funcionalidade->save();
        return redirect()->route('listFunc', ['id' => $projeto_id])
        ->with('FuncionalidadeCad','Funcionalidade cadastrada com sucesso !');
    }
    public function editFunc($id_funcionalidades){
        $data = Funcionalidade::find($id_funcionalidades);
        if($data){
            return view('AdminTarefaViews.editFunc',['data'=>$data]);
        }else{
            return redirect()->route('listFunc');
        }
    }
    public function editActionFunc(Request $request, $id_funcionalidades){
        $request->validate([
            'nome_funcionalidade'=>['required','string','min:5'],
            'data_inicio'=>['required','date'],
            'data_fim'=>['required','date'],
            'status_funcionalidade'=>['required','string']
            
        ]);
        $nome_funcionalidade = $request->input('nome_funcionalidade');
        $data_inicio = $request->input('data_inicio');
        $data_fim = $request->input('data_fim');
        $status_funcionalidade = $request->input('status_funcionalidade');
       
        if($data_inicio > $data_fim){
            return redirect()->route('editFunc',$id_funcionalidades)
            ->WithErrors('Erro! a data de inicio não pode ser maior do que a data do término')
            ->WithInput();
         }

         try{
            //para usar o comando abaixo é necessario permitir no arquivo model Funcionalidade, atraves do comando $fillable, pois é como se estivesse se passando um grande massa de dados. Porem pode ser feito de outra forma
            Funcionalidade::find($id_funcionalidades)
            ->update(['nome_funcionalidade'=>$nome_funcionalidade,'data_inicio'=>$data_inicio,'data_fim'=>$data_fim,'status_funcionalidade'=>$status_funcionalidade]);
            return redirect()->route('listFunc')
            ->With('Sucesso','Funcionalidade alterada com sucesso !');
         }catch(\Excpetion $e){
            return redirect()->route('listFunc')
            ->With('Erro','Erro! a funcionalidade não pode ser alterada, contate o administrador do sistema !');
         }
    }
    public function delFunc($id_funcionalidades){
        try{
            Funcionalidade::find($id_funcionalidades)->delete();
            return redirect()->route('listFunc')
            ->with('Sucesso','Funcionalidade excluída com sucesso !');
        }catch(\Exception $e){
            return redirect()->route('listFunc')
            ->with('Erro', 'Erro! a funcionalidade não pode ser excluída, contate o administrador do sistema');
        }
    }
}

