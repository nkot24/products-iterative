<x-layout title="Produkti">
    <h1>Produktu saraksts</h1>

    <a href="{{ route('products.create') }}">+ Jauns Produkts</a>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nosaukums</th>
                <th>Daudzums</th>
                <th>Derīguma termiņš</th>
                <th>Statuss</th>
                <th>Darbības</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->expiration_date?->format('d.m.Y') ?? '—' }}</td>
                    <td>{{ ucfirst($product->status) }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}">Skatīt</a> |
                        <a href="{{ route('products.edit', $product) }}">Rediģēt</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
