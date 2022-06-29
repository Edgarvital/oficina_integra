@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('tarefa.update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$tarefa->id}}">
        <div class="text-center bg-dark p-1" style="color: white; width: 100%">
            <h1 style="text-align: center">Atualizar Tarefa</h1>
        </div>
        <div class="row my-4">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <label for="nome">Nome da Tarefa:</label>
                <input class="form-control" type="text" name="nome" id="nome" value="{{$tarefa->nome}}">
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class=" col-sm-2 my-2">
                <a class="btn btn-secondary" href="{{route('tarefa.index', ['id' => $tarefa->atividade->id])}}" style="width: 100%">Voltar</a>
            </div>
            <div class="text-center col-sm-2 my-2">
                <button class="btn btn-primary" type="submit" style="width: 100%">Alterar</button>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </form>
@endsection
