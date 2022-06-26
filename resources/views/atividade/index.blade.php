<div>
    <h1 style="text-align: center">Lista de Atividades - <a href="{{route('atividade.create')}}">Cadastrar</a></h1>

    <ol style="list-style-position: inside; text-align: center">
        @foreach($atividades as $atividade)
            <li>
                {{$atividade->nome}}, <a href="{{route('atividade.show', ['id' => $atividade->id])}}">Mostrar Atividade</a>,
                <a href="{{route('atividade.edit', ['id' => $atividade->id])}}">Editar Atividade</a>,
                <a href="{{route('tarefa.index', ['id' => $atividade->id])}}">Tarefas</a>,
                <a href="{{route('atividade.remove', ['id' => $atividade->id])}}">Remover Atividade</a>
            </li>
        @endforeach
    </ol>


</div>
