<x-layout title="Nova Série">
    <form action="" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <div class="btn-group">
            <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Salvar</button>
            <a href="/series" class="btn btn-danger"><i class="bi bi-arrow-return-left"></i> Voltar</a>
        </div>
    </form>
</x-layout>
