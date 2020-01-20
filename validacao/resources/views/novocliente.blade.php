<html>
    <head>
        <title>Cadastro de Cliente</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <style>
            body{
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <main role="main">
            <div class="row">
                <div class="container col-sm-8 offset-md-2">
                    <div class="card border">
                        <div class="card-header">
                            <div class="card-title">
                                Cadastro de Cliente
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/cliente" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nome">Nome do cliente</label>
                                    <input type="text" id="nome" class="form-control {{$errors->has('nome')? 'is-invalid':''}}" name="nome" placeholder="Nome do Cliente">
                                    @if ($errors->has('nome'))
                                    <div class="invalid-feedback">
                                        {{$errors->first()}}
                                    </div>
                                        
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="idade">Idade do cliente</label>
                                    <input type="number" id="idade" class="form-control" name="idade" placeholder="Idade do Cliente">
                                </div>
                                <div class="form-group">
                                    <label for="endereco">Endereço do cliente</label>
                                    <input type="text" id="endereco" class="form-control" name="endereco" placeholder="Endereço do Cliente">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail do cliente</label>
                                    <input type="text" id="email" class="form-control" name="email" placeholder="E-mail do Cliente">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                                <button type="cancel" class="btn btn-sm btn-danger">Cancelar</button>
                            </form>
                        </div>
                        @if ($errors->any())
                            <div class="card-footer">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}    
                                    </div>    
                                @endforeach
                                
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </main>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>