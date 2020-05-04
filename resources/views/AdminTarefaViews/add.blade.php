@extends('adminlte::page')

@section('title','adicionar tarefa')
    
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
                            <label for="nome_tarefa">NOME DA TAREFA</label><br>
                            <input type="text" name="nome_tarefa" id="nome_tarefa" class="form-control" value="{{old('nome_tarefa')}}" placeholder="Informe o nome da tarefa">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group ">
                            <label for="titulo">DATA DE INICIO</label><br>
                            <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{old('data_inicio')}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="titulo">DATA DO TÉRMIMO</label><br>
                            <input type="date" name="data_fim" id="data_fim" class="form-control" value="{{old('data_fim')}}" placeholder="Informe a data">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="titulo">STATUS TAREFA</label><br>
                            <select class="form-control" name="status_tarefa">
                                <option value="">Selecione uma tarefa</option><br/>
                                <option value="Pendente">Pendente</option>
                                <option value="Concluída">Concluída</option>
                                <option value="Em Desenvolvemento">Em Desenvolvemento</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="titulo">PROJETO</label><br>
                            <select class="form-control" name="status_projeto">
                                    <option value="">Selecione um projeto</option><br/><br/>
                                    @foreach($projeto as $item)
                                         <br><option value="{{$item['id_projeto']}}">{{$item['nome_projeto']}}</option><br/>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                            <a class="btn btn-danger" href="{{route('list')}}" role="button">Cancelar</a>
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
