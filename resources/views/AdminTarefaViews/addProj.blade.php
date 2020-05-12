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
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Cadastro de Projetos</h3>
            </div>
            <form method="POST" role="form">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nome_tarefa">NOME DO PROJETO  *</label><br>
                                <input type="text" name="nome_projeto" id="nome_projeto" class="form-control" value="{{old('nome_projeto')}}" autofocus placeholder="Informe o nome do projeto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nome_tarefa">DESCRIÇÃO *</label><br>
                                <input type="text" name="descricao" id="descricao" class="form-control" value="{{old('descricao')}}" placeholder="Informe uma descrição sobre o projeto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group ">
                                <label for="data_inicio">DATA DE INICIO *</label><br>
                                <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{old('data_inicio')}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="data_fim">DATA DO TÉRMIMO *</label><br>
                                <input type="date" name="data_fim" id="data_fim" class="form-control" value="{{old('data_fim')}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="status_projeto">STATUS</label><br>
                                <input type="text" name="status_projeto" id="status_projeto" value="Em Desenvolvimento" readonly="" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success icon">Cadastrar <i class="fas fa-fw fa-save (alias)"></i></button>                                   
                                    <a href="{{route('listProj')}}" role="button" class="btn btn-danger icon">Cancelar <i class="fas fa-fw fa-times"></i></a>
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
