<form method="POST" action="{{route('tarefa.update')}}">
    @csrf
    <div>
        <input type="hidden" name="id" value="{{$tarefa->id}}">
        <label for="nome">Nome da tarefa:</label>
        <input type="text" name="nome" id="nome" value="{{$tarefa->nome}}">
        <br>
        <label for="flag_concluida">Concluida:</label>
        <input type="checkbox" name="flag_concluida" id="flag_concluida" @if($tarefa->flag_concluida) checked @endif>
    </div>
    <button type="submit">Alterar</button>
</form>
