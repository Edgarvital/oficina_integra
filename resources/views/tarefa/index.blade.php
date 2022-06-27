@extends('layouts.app')
@section('content')
<div>
    <h1 style="text-align: center">Lista de Tarefas - <a href="{{route('tarefa.create', ['id' => $atividade->id])}}">Cadastrar</a></h1>

    <ol style="list-style-position: inside; text-align: center">
        @foreach($tarefas as $tarefa)
            <li>
                {{$tarefa->nome}}, <a href="{{route('tarefa.show', ['id' => $tarefa->id])}}">Mostrar tarefa</a>,
                <a href="{{route('tarefa.edit', ['id' => $tarefa->id])}}">Editar tarefa</a>,
                <a href="{{route('tarefa.remove', ['id' => $tarefa->id])}}">Remover tarefa</a>
            </li>
        @endforeach
    </ol>

    <a style="margin-left: 49%" href="{{route('atividade.index')}}">Voltar</a>
</div>
@endsection

