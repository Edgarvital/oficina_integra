@extends('layouts.app')
@section('content')
    <div>
        <div class="text-center bg-dark p-1" style="color: white; width: 100%">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Lista de Tarefas</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" style=";float: right; margin-right: 2%; margin-top: 6px" href="{{route('tarefa.create', ['id' => $atividade->id])}}">Cadastrar</a>
                </div>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="text-center" scope="col">Nome</th>
                <th class="text-center" scope="col">Conclusão</th>
                <th class="text-center" scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tarefas as $tarefa)
                <tr>
                    <td class="text-center">{{$tarefa->nome}}</td>
                    <td class="text-center">@if($tarefa->flag_concluida) Concluída @else Não concluída @endif{{$tarefa->flag_concluida}}</td>
                    <td class="text-center"><a class="btn btn-secondary" href="{{route('tarefa.show', ['id' => $tarefa->id])}}">Mostrar</a>
                        <a class="btn btn-secondary" href="{{route('tarefa.edit', ['id' => $tarefa->id])}}">Editar</a>
                        <a class="btn btn-secondary" href="{{route('tarefa.remove', ['id' => $tarefa->id])}}">Remover</a>
                    </td>
                </tr>
            @endforeach
            @empty($tarefas)
                <tr>

                </tr>
            @endempty
            </tbody>
        </table>
    </div>
@endsection
