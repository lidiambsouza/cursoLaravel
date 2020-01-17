@extends('layout.app', ["current"=>"categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categorias/{{$cat->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da categorias</label>
                    <input value="{{$cat->nome}}" type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">cancelar</button>
            </form>
        </div>
    </div>

@endsection