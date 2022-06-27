@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('tarefa.store')}}">
    @csrf
    <div>
        <input type="hidden" name="atividade_id" value="{{$atividade->id}}">
        <input type="hidden" name="flag_concluida" value="false">

        <label for="nome">Nome da Tarefa:</label>
        <input type="text" name="nome" id="nome">
    </div>
    <button type="submit">Cadastrar</button>
</form>
@endsection
