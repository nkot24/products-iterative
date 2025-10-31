<x-layout :title="$product->name">
    <h1>{{ $product->name }}</h1>
    <p>Daudzums: {{ $product->quantity }}</p>
    <p>{{ $product->description }}</p>
    <p>Derīguma termiņš: {{ $product->expiration_date?->format('d.m.Y') ?? '—' }}</p>
    <p>Statuss: {{ ucfirst($product->status) }}</p>

    <a href="{{ route('products.edit', $product) }}">Rediģēt</a> |
    <a href="{{ route('products.index') }}">Atpakaļ</a>
</x-layout>
