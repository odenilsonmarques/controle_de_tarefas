@extends('adminlte::page')
    
@section('title','projetos')

@section('content_header')
    <h2 style="text-align:center"><strong>lista de projetos</strong></h2>
    <a href="{{route('addProj')}}" class="btn btn-sm btn-success icon">
        <div class="icon">
            <i class="fas fa-fw fa-user-plus"></i>
        </div>
        Adicionar novo projeto
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 text-center ">  
            @if(session('Sucesso'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                    <p>{{session('Sucesso')}}</p>
                </div>
            @endif
            
            @if(session('Erro'))
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                    <p>{{session('Erro')}}</p>
                </div>
            @endif

            @if(session('SucessoCad'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                    <p>{{session('SucessoCad')}}</p>
                </div>
            @endif
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>PROJETO</th>
                <th>DESCRIÇÃO</th>
                <th>INICIO</th>
                <th>TÉRMINO</th>
                <th>SITUAÇÃO</th>
                <th>AÇÃO</th>
            </tr>
        @foreach ($listProj as $item)
            <tr>
                <td>{{$item->id_projetos}}</td>
                <td>{{$item->nome_projeto}}</td>
                <td>{{$item->descricao}}</td>
                <td>{{\Carbon\Carbon::parse($item->data_inicio)->format('d/m/Y')}}</td>
                <td>{{\Carbon\Carbon::parse($item->data_fim)->format('d/m/Y')}}</td>
                <td>{{$item->status_projeto}}</td>
                <td>
                    <a href="{{route('listFunc',['id_funcionalidades'=>$item->id_projetos])}}" class="btn btn-sm btn-info">Funcionalidades</a>
                    <a href="{{route('editProj',['id_projetos'=>$item->id_projetos])}}" class="btn btn-sm btn-info">Editar</a>
                    <a href="{{route('delProj', ['id_projetos'=>$item->id_projetos])}}" class="btn btn-sm btn-danger" onclick="return confirm('DESEJA EXCLUIR O PROJETO ?')">Excluir</a>
                </td>
            </tr>
        @endforeach
        </table><br>
        <!--comando para exibir a paginação iniciada com pagina no TarefaController-->
        {{$listProj->links()}} 
        <div class="card-footer clearfix">
            <div class="float-right">
                <!--essa informação foi declarada no arquivo AppServiceProvider-->
                <b>Versão: {{$versao}}</b>
            </div>
        </div>
    </div>  
@endsection


   



