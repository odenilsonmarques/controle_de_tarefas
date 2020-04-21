@extends('adminlte::page')
    
@section('title','tarefas')
    
@section('content_header')
    <h2 style="text-align:center"><strong>Bem - vindo a lista de tarefas</strong></h2>
    <a href="{{route('add')}}" class="btn btn-sm btn-success">Adicionar nova tarefa</a>
@endsection

@section('content')
<div class="card">
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>TAREFA</th>
            <th>INICIO</th>
            <th>TERMINO</th>
            <th>SITUAÇÃO</th>
            <th>AÇÃO</th>
        </tr>
    @foreach ($list as $item)
        <tr>
            <td>{{$item->id_tarefas}}</td>
            <td>{{$item->nome_tarefa}}</td>
            <td>{{\Carbon\Carbon::parse($item->data_inicio)->format('d/m/Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item->data_fim)->format('d/m/Y')}}</td>
            <td>{{$item->status_tarefa}}</td>
            <td>
                <a href="{{route('edit',['id_tarefas'=>$item->id_tarefas])}}" class="btn btn-sm btn-info">Editar</a>
                <a href="{{route('del',['id_tarefas'=>$item->id_tarefas])}}" class="btn btn-sm btn-danger" onclick="return confirm('DESEJA EXCLUIR A TAREFA ?')">Excluir</a>
            </td>
        </tr>
    @endforeach
    </table> 
</div>
<!--comando para exibir a paginação iniciada com pagina no AgendaController-->
{{$list->links()}}  
@endsection


   



