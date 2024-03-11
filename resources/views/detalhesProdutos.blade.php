@extends('layout.layoutpaginas')

@section('titulo', 'Detalhe Produtos')

@section('conteudo')
    
    
   <div class="product-details">
        <p>Detalhes do Produto</p>
        <img src="https://picsum.photos/300/200" alt=""/>
        <h2 class="detail-title">{{ $produto['titulo'] }}</h2>
        <div class="price">{{ $produto['preco'] }}</div>
        <p class="description">{{ $produto['descricao'] }}</p>
    </div>

@endsection

