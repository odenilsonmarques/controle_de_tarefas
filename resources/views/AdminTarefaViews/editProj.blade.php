@extends('adminlte::page')

@section('title','adicionar projeto')
    
@section('content')
    <div class="card">
        @if($errors->any())
            <div class="row">
                <div class="col-sm-12">  
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}<br/>
                                </li>
                            @endforeach    
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <form method="POST" role="form">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="nome_tarefa">NOME DO PREJETO</label><br>
                            <input type="text" name="nome_projeto" id="nome_projeto" class="form-control" value="{{$data->nome_projeto}}" placeholder="Informe o nome do projeto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="nome_tarefa">DESCRIÇÃO</label><br>
                            <input type="text" name="descricao" id="descricao" class="form-control" value="{{$data->descricao}}" placeholder="Informe uma descrição sobre o projeto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group ">
                            <label for="data_inicio">DATA DE INICIO</label><br>
                            <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{$data->data_inicio}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="data_fim">DATA DO TÉRMIMO</label><br>
                            <input type="date" name="data_fim" id="data_fim" class="form-control"  value="{{$data->data_fim}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="status_projeto">STATUS</label><br>
                            <select class="form-control" name="status_projeto">
                                <option value="">Selecione</option><br/>
                                <option value="Em Desenvolvimento">Em Desenvolvimento</option>
                                <option value="Concluído">Concluído</option>
                                <option value="Pendente">Pendente</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Salvar Alteração</button>
                            <a class="btn btn-danger" href="{{route('listProj')}}" role="button">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
        <div class="card-footer clearfix">
            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right">
                        <!--essa informação foi declarada no arquivo AppServiceProvider-->
                        <b>Versão: {{$versao}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
