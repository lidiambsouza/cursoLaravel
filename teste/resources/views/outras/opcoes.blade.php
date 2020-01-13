@extends('layouts.principal')

@section('titulo', 'opcoes')
@section('conteudo')
<div>
    <ul>
        <li><a class="warning" href="{{route('opcoes',1)}}">warning</a></li>
        <li><a class="info"    href="{{route('opcoes',2)}}">info</a></li>
        <li><a class="success" href="{{route('opcoes',3)}}">success</a></li>
        <li><a class="error selected"   href="{{route('opcoes',4)}}">error</a></li>
    </ul>
</div>
@if (isset($opcao))
@switch($opcao)
    @case(1)
        @alerta(['titulo'=> 'Erro fatal', 'tipo'=>'warning'])
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
        @endalerta        
        @break

    @case(2)
        @alerta(['titulo'=> 'Erro fatal2', 'tipo'=>'info'])
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
        @endalerta
        @break
    @case(3)
        @alerta(['titulo'=> 'Erro fatal3', 'tipo'=>'success'])
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
        @endalerta        
        @break
    @case(4)
        @alerta(['titulo'=> 'Erro fatal3', 'tipo'=>'error'])
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
        @endalerta        
        @break
   
@endswitch
    
@endif

@endsection