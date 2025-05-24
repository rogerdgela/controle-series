<form action="{{ $action }}" method="post">
    @csrf

    @if($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        <label for="name" class="form-label">Nome da Série:</label>
        <input type="text"
               id="name"
               name="name"
               class="form-control"
               @isset($name)value="{{ $name }}"@endisset>
    </div>

    <div class="btn-group">
        <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Salvar</button>
        <a href="/series" class="btn btn-danger"><i class="bi bi-arrow-return-left"></i> Voltar</a>
    </div>
</form>
