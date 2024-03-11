@extends('layout.layoutpaginas')

@section('titulo', 'Produtos')

@section('conteudo')
    
@foreach ($produtos as $produto)
    <div class="promo">
        <h2><a class="productTitle" href="{{ route('produtos.show', ['id' => $produto['id']]) }}">{{ $produto['titulo'] }}</a></h2>
        <div class="price">{{ $produto['preco'] }}</div>
        <p class="description">{{ $produto['descricao'] }}</p>
    </div>
@endforeach

@endsection
