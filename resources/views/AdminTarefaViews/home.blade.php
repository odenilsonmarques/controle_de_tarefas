@extends('adminlte::page')

<!--trocando o titulo da home-->
@section('title','tarefas')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="small-box bg-info">
                <div class="inner text-center"> 
                    <h4>Listar Tarefas</h4> 
                </div>
                <a href="{{route('list')}}" class="small-box-footer">
                    <h5>Total {{$home->count()}}</h5>
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="small-box bg-success">
                <div class="inner text-center"> 
                    <h4>Cadastrar Tarefa</h4>    
                </div>
                <a href="{{route('add')}}" class="small-box-footer">
                    <h5>Formulário</h5>
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection