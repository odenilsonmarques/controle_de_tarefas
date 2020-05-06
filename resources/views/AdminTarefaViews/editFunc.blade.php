@extends('adminlte::page')

@section('title','editar funcionalidade')
    
@section('content')
    <div class="card">
        @if($errors->any())
            <ul>
                <h3 style="color:#ff0000">Ocorreu um Erro</h3>
                    @foreach($errors->all() as $error)
                        <li style="color:#ff0000">
                            {{$error}}<br/>
                        </li>
                    @endforeach    
            </ul>
        @endif
            <form method="POST" role="form">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nome_funcionalidade">NOME DA FUNCIONALIDADE</label><br>
                                <input type="text" name="nome_funcionalidade" id="nome_funcionalidade" class="form-control" value="{{$data->nome_funcionalidade}}" placeholder="Informe o nome da funcionalidade">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group ">
                                <label for="titulo">DATA DE INICIO</label><br>
                                <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{$data->data_inicio}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="titulo">DATA DE FIM</label><br>
                                <input type="date" name="data_fim" id="data_fim" class="form-control" value="{{$data->data_fim}}" placeholder="Informe a data">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="titulo">STATUS</label><br>
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
                                <button type="submit" class="btn btn-success">Salvar Alteração</button>
                                <a class="btn btn-danger" href="{{route('listFunc')}}" role="button">Cancelar</a>
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
