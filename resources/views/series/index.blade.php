<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-primary mb-3">Adicionar</a>

    <div class="list-group">
        @foreach ($series as $serie)
            <a href="#" class="list-group-item list-group-item-action">{{ $serie->nome }}</a>
        @endforeach
    </div>
</x-layout>
