<x-layout title="Editar Série {{ $serie->nome }}">
    <x-series.form :action="route('series.store', $serie->id)" :nome="$serie->nome" />
</x-layout>
