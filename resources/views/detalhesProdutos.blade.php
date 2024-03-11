@extends('layout.layoutpaginas')

@section('titulo', 'Detalhe Produtos')

@section('conteudo')
    
    
   <div class="product-details">
        <h1>Detalhes do Produto</h1>
        <h2>{{ $produto['titulo'] }}</h2>
        <div class="price">{{ $produto['preco'] }}</div>
        <p class="description">{{ $produto['descricao'] }}</p>
    </div>

@endsection

