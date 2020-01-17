@extends('layout.app', ["current"=>"categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categorias" method="POST">
                <div class="form-group">
                    <label for="nomeCategoria">Nome da categorias</label>
                    <input type="text" class="form-control" name="novaCategoria" id="novaCategoria" placeholder="Categoria">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">cancelar</button>
            </form>
        </div>
    </div>

@endsection