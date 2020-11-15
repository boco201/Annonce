@extends('layout.index')

@section('content')
<div class="container">
<h2>BIENVENUE SUR NOTRE PLATE FORME TSEMBEHOU </h2>
<h1><a href="{{ route('products.index') }}">Titre: {{ $product->title }}</a> </h1>
<p>Description: {{ $product->description }}</p>
<h3 style="color:red;">Prix: {{ $product->price }}€</h3>
<h2>BIENVENUE SUR NOTRE PLATE FORME TSEMBEHOU </h2>
</div>
@endsection
