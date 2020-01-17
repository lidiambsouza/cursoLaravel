@extends('layout.app', ["current"=>"home"])
@section('body')
<div class="jumbotton bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produto</h5>
                    <p class="card-text">
                        Aqui você cadastra todos seus produtos.
                        Só não se esqueça de cadastrar previamente as categorias.
                    </p>
                    <a href="/produtos" class="btn btn-primary">cadastre seu produtos</a>
                </div>
            </div>
            <!-- segundo card-->
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Categorias</h5>
                    <p class="card-text">
                       Cadastre as categorias dos seus produtos.
                    </p>
                    <a href="/produtos" class="btn btn-primary">cadastre suas Categorias</a>
                </div>
            </div>

        </div>
    </div>
</div>
    
@endsection