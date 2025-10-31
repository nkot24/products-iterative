<x-layout title="Rediģēt Produktu">
    <h1>Rediģēt produktu</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nosaukums:</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}"><br>

        <label>Daudzums:</label>
        <input type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}"><br>

        <label>Apraksts:</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea><br>

        <label>Derīguma termiņš:</label>
        <input type="date" name="expiration_date" value="{{ old('expiration_date', optional($product->expiration_date)->format('Y-m-d')) }}"><br>

        <label>Statuss:</label>
        <select name="status">
            <option value="active" {{ old('status', $product->status) === 'active' ? 'selected' : '' }}>Aktīvs</option>
            <option value="inactive" {{ old('status', $product->status) === 'inactive' ? 'selected' : '' }}>Neaktīvs</option>
        </select><br>

        <button type="submit">Saglabāt</button>
    </form>
</x-layout>
