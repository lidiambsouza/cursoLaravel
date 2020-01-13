
@extends('layouts.principal')
@section('titulo', 'Clientes')
@section('conteudo')
    

    


<h3>{{$titulo}}</h3>

<a href="{{route ('clientes.create')}}">Novo Cliente</a>
@if(count($clientes)>0)

<ol>
    @foreach ($clientes as $c)
    <li>
        {{$c['nome']}} |
        <a href="{{route ('clientes.edit', $c['id'])}}">editar</a>
        <a href="{{route ('clientes.show', $c['id'])}}">infor</a>
        <form action="{{route ('clientes.destroy', $c['id'])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar">
        </form>
    </li>
    @endforeach
    
</ol>
<hr>
@for ($i = 0; $i < 10; $i++)
    {{$i}},
    
@endfor
<br>
@for ($i = 0; $i < count($clientes); $i++)
    {{$i}} : {{$clientes[$i]['nome']}},
    
@endfor
<br>
@foreach ($clientes as $c)
<p>
    {{$c['nome']}} |
    @if ($loop->first)
    (primeiro) |        
    @endif

    @if ($loop->last)
    (ultimo) |        
    @endif
    [ {{$loop->index}} - {{$loop->iteration}} ] / {{$loop->count}}

</p>

    
@endforeach

@else 
<h4> Não exite clientes cadastrados</h4>
@endif


@empty($clientes)
<h4> Não exite clientes cadastrados</h4>
@endempty

@endsection