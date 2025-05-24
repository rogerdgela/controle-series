<x-layout title="{{ __('messages.app_name') }}">
    <a href="{{ route('series.create') }}" class="btn btn-primary mb-3">Adicionar</a>

    @if ($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endif

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->name }}

                <span class="d-flex">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-safe"></i>
                    </a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="POST" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm float-end">
                            <i class="bi bi-x"></i>
                        </button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
