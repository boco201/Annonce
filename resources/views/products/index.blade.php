@extends('layout.index')

@section('content')
<div class="container">
<h2>BIENVENUE SUR NOTRE PLATE TSEMBEHOU </h2>
@foreach($products as $product)
<h1><a href="{{ route('products.show', $product->id) }}">Titre: {{ $product->title }}</a> </h1>
<p>Description: {{ $product->description }}</p>
<h3 style="color:red;">Prix: {{ $product->price }}€</h3>
@endforeach
</div>


@endsection