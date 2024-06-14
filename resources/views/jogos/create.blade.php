<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Jogo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>Criar Jogo</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('jogos.store') }}" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ old('nome') }}" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>
        <div class="mb-3">
            <label for="empresa" class="form-label">Empresa</label>
            <input type="text" class="form-control" name="empresa" value="{{ old('empresa') }}" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Gênero</label>
            <input type="text" class="form-control" name="genero" value="{{ old('genero') }}" required>
        </div>
        <div class="mb-3">
            <label for="indicacao" class="form-label">Indicação</label>
            <input type="text" class="form-control" name="indicacao" value="{{ old('indicacao') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('jogos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
<script src="https://stackpath.boostrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script> 
</body>
</html>