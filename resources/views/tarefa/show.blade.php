@extends('layouts.app')
@section('content')
    <div class="text-center bg-dark p-1" style="color: white; width: 100%">
        <h1 style="text-align: center">Tarefa - {{$tarefa->nome}}</h1>
    </div>

<p style="text-align: center">Atividade: {{$tarefa->atividade->nome}},
    Status: @if($tarefa->flag_concluida) Concluida @else Não concluida @endif</p>

<a class="btn btn-secondary" style="margin-left: 49%" href="{{route('tarefa.index', ['id' => $tarefa->atividade->id])}}">Voltar</a>
@endsection
