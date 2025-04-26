<x-layout title="Séries">
    <a href="/series/criar">Criar</a>

    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
