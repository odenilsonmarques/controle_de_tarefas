<?php
//foi implemenado nesta rota a pasta AdminTarefaControllerHome, e dentro dele foi inserido o controller ProjetoController.
namespace App\Http\Controllers\AdminTarefaController;

//importando a classe controller
use App\Http\Controllers\Controller;

//importanto o model a ser usado nesse controller
use App\Projeto;

use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function listProj(){
        $listProj = Projeto::all();
        return view('AdminTarefaViews.listProj',['listProj'=>$listProj]);
    }
    public function addProj(){
        return view('AdminTarefaViews.addProj');
    }
    public function addActionProj(Request $request){
        $request -> validate([
            'nome_projeto'=>['required','string','min:5'],
            'descricao'=>['required','string','min:10'],
            'data_inicio'=>['required','date'],
            'data_fim'=>['required','date'],
            'status_projeto'=>['required','string']
        ]);
            $nome_projeto = $request->input('nome_projeto');
            $descricao = $request->input('descricao');
            $data_inicio = $request->input('data_inicio');
            $data_fim = $request->input('data_fim');
            $status_projeto = $request->input('status_projeto');

            if($data_inicio > $data_fim){
                return redirect()->route('addProj')
                ->withErrors('Erro! a data de inicio não pode ser maior do que a data de término')
                ->WithInput();
            }

            $projeto = new Projeto();
            $projeto-> nome_projeto = $nome_projeto;
            $projeto-> descricao = $descricao;
            $projeto-> data_inicio = $data_inicio;
            $projeto-> data_fim = $data_fim;
            $projeto-> status_projeto = $status_projeto;
            $projeto-> save();
            return redirect()->route('listProj');
    }

    public function editProj($id_projeto){
        $data = Projeto::find($id_projeto);
        if($data){
            return view('AdminTarefaViews.editProj',['data'=>$data]);
        }else{
            return redirect()->route('listProj');
        }
    }
    public function editActionProj(Request $request, $id_projeto){
        $request -> validate([
            'nome_projeto'=>['required','string','min:5'],
            'descricao'=>['required','string','min:10'],
            'data_inicio'=>['required','date'],
            'data_fim'=>['required','date'],
            'status_projeto'=>['required','string']
        ]);
            $nome_projeto = $request->input('nome_projeto');
            $descricao = $request->input('descricao');
            $data_inicio = $request->input('data_inicio');
            $data_fim = $request->input('data_fim');
            $status_projeto = $request->input('status_projeto');

            if($data_inicio > $data_fim){
                return redirect()->route('editProj')
                ->withErrors('Erro! a data de inicio não pode ser maior do que data a final')
                ->withIpunt();
            }

            Projeto::find($id_projeto)
            ->update(['nome_projeto'=>$nome_projeto,'descricao'=>$descricao,'data_inicio'=>$data_inicio,'data_fim'=>$data_fim,'status_projeto'=>$status_projeto]);
            return redirect()->route('listProj');
    }
    public function delProj($id_projeto){
        Projeto::find($id_projeto)->delete();
        return redirect()->route('listProj');
    }


}
