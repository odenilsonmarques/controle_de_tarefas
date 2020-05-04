@extends('adminlte::page')
    
@section('title','projetos')
    
@section('content_header')
    <h2 style="text-align:center"><strong>Bem - vindo à lista de projetos</strong></h2>
    <a href="{{route('addProj')}}" class="btn btn-sm btn-success">Adicionar novo projeto</a>
@endsection

@section('content')
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
            <td>{{$item->id_projeto}}</td>
            <td>{{$item->nome_projeto}}</td>
            <td>{{$item->descricao}}</td>
            <td>{{\Carbon\Carbon::parse($item->data_inicio)->format('d/m/Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item->data_fim)->format('d/m/Y')}}</td>
            <td>{{$item->status_projeto}}</td>
            <td>
                <a href="{{route('editProj',['id_projeto'=>$item->id_projeto])}}" class="btn btn-sm btn-info">Editar</a>
                <a href="{{route('delProj',['id_projeto'=>$item->id_projeto])}}"  class="btn btn-sm btn-danger" onclick="return confirm('DESEJA EXCLUIR O PROJETO ?')">Excluir</a>
            </td>
        </tr>
    @endforeach
    </table><br>
    <div class="card-footer clearfix">
        <div class="float-right">
            <!--essa informação foi declarada no arquivo AppServiceProvider-->
            <b>Versão: {{$versao}}</b>
        </div>
    </div>
</div>  
@endsection


   



