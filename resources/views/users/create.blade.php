<x-layout title="Novo Usuário">
    <form method="post" class="mt-2">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Registrar</button>
        <a href="{{ route('login.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </form>
</x-layout>