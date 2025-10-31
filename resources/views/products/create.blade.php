@extends('layouts.app')

@section('content')
    <h1>Pievienot jaunu produktu</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Nosaukums:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br>

        <label>Apraksts:</label>
        <textarea name="description">{{ old('description') }}</textarea><br>

        <label>Cena:</label>
        <input type="number" step="0.01" name="price" value="{{ old('price') }}"><br>

        <button type="submit">Saglabāt</button>
    </form>

    <a href="{{ route('products.index') }}">Atpakaļ</a>
@endsection
