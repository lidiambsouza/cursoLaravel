
<a href="{{route ('clientes.create')}}">Novo Cliente</a>
<ol>
    @foreach ($clientes as $c)
    <li>
        {{$c['nome']}} |
        <a href="{{route ('clientes.edit', $c['id'])}}">editar</a>
        <a href="{{route ('clientes.show', $c['id'])}}">infor</a>
    </li>
    @endforeach
    
</ol>


