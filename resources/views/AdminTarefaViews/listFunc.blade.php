@extends('adminlte::page')
    
@section('title','lista de funcionalidades')
    
@section('content_header')
    <h2 style="text-align:center"><strong>lista de funcionalidades</strong></h2>
    <a href="{{route('addFunc')}}" class="btn btn-sm btn-success">
        <div class="icon">
            <i class="fas fa-fw fa-user-plus"></i>
        </div>
        Adicionar nova funcionalidade
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

            @if(session('FuncionalidadeCad'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                <p>{{session('FuncionalidadeCad')}}</p>
            </div>
        @endif
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>FUNCIONALIDADE</th>
                <th>INICIO</th>
                <th>TERMINO</th>
                <th>SITUAÇÃO</th>
                <th>PROJETO</th>
                <th>AÇÃO</th>
            </tr>
        @foreach ($listFunc as $item)
            <tr>
                <td>{{$item->id_funcionalidade}}</td>
                <td>{{$item->nome_funcionalidade}}</td>
                <td>{{\Carbon\Carbon::parse($item->data_inicio)->format('d/m/Y')}}</td>
                <td>{{\Carbon\Carbon::parse($item->data_fim)->format('d/m/Y')}}</td>
                <td>{{$item->status_funcionalidade}}</td>
                <td>{{$item->projeto->nome_projeto}}</td>
                <td>
                    <a href="{{route('editFunc',['id_funcionalidade'=>$item->id_funcionalidade])}}" class="btn btn-sm btn-info">Editar</a>
                    <a href="{{route('delFunc',['id_funcionalidade'=>$item->id_funcionalidade])}}" class="btn btn-sm btn-danger" onclick="return confirm('DESEJA EXCLUIR A TAREFA ?')">Excluir</a>
                </td>
            </tr>
        @endforeach
        </table><br>
        <!--comando para exibir a paginação iniciada com pagina no FuncionalidadeController-->
        {{$listFunc->links()}}  
        <div class="card-footer clearfix">
            <div class="float-right">
                <!--essa informação foi declarada no arquivo AppServiceProvider-->
                <b>Versão: {{$versao}}</b>
            </div>
        </div>
    </div>  
@endsection


   



