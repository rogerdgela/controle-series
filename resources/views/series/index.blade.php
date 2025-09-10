<x-layout title="Séries" :mensagem-sucesso="$mensagemSucesso">
    <a href="{{ route('series.create') }}" title="Adicionar" class="btn btn-success btn-sm mb-2">
        <i class="bi bi-plus"></i>
        Adicionar
    </a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{ route('seasons.index', $serie->id) }}">
                {{ $serie->nome }}
            </a>

            <span class="d-flex">
                <a href="{{ route('series.edit', $serie->id) }}" title="Editar" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil"></i>
                    Editar
                </a>

                <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button title="Remover" class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i>
                        Remover
                    </button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
