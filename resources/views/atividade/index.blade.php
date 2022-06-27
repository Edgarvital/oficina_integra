@extends('layouts.app')
@section('content')
    <div>
        <div class="text-center bg-dark p-1" style="color: white; width: 100%">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Lista de Atividades</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" style=";float: right; margin-right: 2%; margin-top: 6px" href="{{route('atividade.create')}}">Cadastrar</a>
                </div>
            </div>
        </div>


        <table class="table table-hover">
            <thead>
            <tr>
                <th class="text-center" scope="col">Nome</th>
                <th class="text-center" scope="col">Data</th>
                <th class="text-center" scope="col">Status</th>
                <th class="text-center" scope="col" style="width: 30%">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($atividades as $atividade)
                <tr>
                    <td class="text-center">{{$atividade->nome}}</td>
                    <td class="text-center">{{$atividade->data}}</td>
                    <td class="text-center">{{$atividade->status}}</td>
                    <td class="text-center"><a class="btn btn-secondary" href="{{route('atividade.show', ['id' => $atividade->id])}}">Mostrar</a>
                        <a class="btn btn-secondary" href="{{route('atividade.edit', ['id' => $atividade->id])}}">Editar</a>
                        <a class="btn btn-secondary" href="{{route('tarefa.index', ['id' => $atividade->id])}}">Tarefas</a>
                        <a class="btn btn-danger" href="{{route('atividade.remove', ['id' => $atividade->id])}}">Remover</a>
                    </td>
                </tr>
            @endforeach
            @empty($atividades)
                <tr>

                </tr>
            @endempty
            </tbody>
        </table>

    </div>
@endsection
