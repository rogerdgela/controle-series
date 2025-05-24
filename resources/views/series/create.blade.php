<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="name" class="form-label">Nome da Série:</label>
                <input type="text"
                    autofocus
                    id="name"
                    name="name"
                    class="form-control"
                    value="{{ old('name') }}">
            </div>
            <div class="col-2">
                <label for="seasonsQtd" class="form-label">Numero de Temporadas:</label>
                <input type="text"
                    id="seasonsQtd"
                    name="seasonsQtd"
                    class="form-control"
                    value="{{ old('seasonsQtd') }}">
            </div>
            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">Eps / Temporada:</label>
                <input type="text"
                    id="episodesPerSeason"
                    name="episodesPerSeason"
                    class="form-control"
                    value="{{ old('episodesPerSeason') }}">
            </div>
        </div>

        <div class="btn-group">
            <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Salvar</button>
            <a href="/series" class="btn btn-danger"><i class="bi bi-arrow-return-left"></i> Voltar</a>
        </div>
    </form>
</x-layout>