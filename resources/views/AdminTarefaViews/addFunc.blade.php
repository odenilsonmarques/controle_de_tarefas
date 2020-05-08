@extends('adminlte::page')

@section('title','adicionar funcionalidade')
    
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
                            <label for="nome_funcionalidade">NOME DA FUNCIONALIDADE</label><br>
                            <input type="text" name="nome_funcionalidade" id="nome_funcionalidade" class="form-control" value="{{old('nome_funcionalidade')}}" placeholder="Informe o nome da funcionalidade">
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
                            <label for="titulo">STATUS FUNCIONALIDADE</label><br>
                            <input type="text" name="status_funcionalidade" id="status_funcionalidade" value="Em Desenvolvimento" readonly="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="titulo">PROJETO</label><br>
                            <select class="form-control" name="projeto">
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