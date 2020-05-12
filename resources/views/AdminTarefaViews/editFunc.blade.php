@extends('adminlte::page')

@section('title','editar funcionalidade')
    
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

        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Alterar funcionalidade</h3>
            </div>    
            <form method="POST" role="form">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nome_funcionalidade">NOME DA FUNCIONALIDADE *</label><br>
                                    <input type="text" name="nome_funcionalidade" id="nome_funcionalidade" class="form-control" value="{{$data->nome_funcionalidade}}" placeholder="Informe o nome da funcionalidade">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group ">
                                <label for="data_inicio">DATA DE INICIO *</label><br>
                                    <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{$data->data_inicio}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group ">
                                <label for="data_fim">DATA DO TÉRMINO *</label><br>
                                    <input type="date" name="data_fim" id="data_fim" class="form-control" value="{{$data->data_fim}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="status_funcionalidade">STATUS *</label><br>
                                    <select class="form-control" name="status_funcionalidade">
                                        <option value="">Selecione</option><br/>
                                        <option value="Pendente">Pendente</option>
                                        <option value="Concluída">Concluída</option>
                                        <option value="Em Desenvolvimento">Em Desenvolvimento</option>
                                    </select>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Salvar Alteração <i class="fas fa-fw fa-save (alias)"></i></button>
                                    <a href="{{route('listFunc')}}" role="button" class="btn btn-danger icon">Cancelar <i class="fas fa-fw fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
