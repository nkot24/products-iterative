@extends('layouts.app')

@section('content')
    <h1>Rediģēt produktu</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nosaukums:</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}"><br>

        <label>Apraksts:</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea><br>

        <label>Cena:</label>
        <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}"><br>

        <button type="submit">Saglabāt</button>
    </form>

    <a href="{{ route('products.show', $product) }}">Atpakaļ</a>
@endsection
