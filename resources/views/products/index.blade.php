@extends('layouts.app')

@section('content')
    <h1>Produkti</h1>

    <a href="{{ route('products.create') }}">+ Pievienot jaunu produktu</a>

    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product) }}">
                    {{ $product->name }} - {{ $product->price }} €
                </a>
                |
                <a href="{{ route('products.edit', $product) }}">Rediģēt</a>
                |
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Dzēst</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
