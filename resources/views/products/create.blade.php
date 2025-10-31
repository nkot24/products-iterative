<x-layout title="Jauns Produkts">
    <h1>Pievienot produktu</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Nosaukums:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br>

        <label>Daudzums:</label>
        <input type="number" name="quantity" value="{{ old('quantity', 0) }}"><br>

        <label>Apraksts:</label>
        <textarea name="description">{{ old('description') }}</textarea><br>

        <label>Derīguma termiņš:</label>
        <input type="date" name="expiration_date" value="{{ old('expiration_date') }}"><br>

        <label>Statuss:</label>
        <select name="status">
            <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Aktīvs</option>
            <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Neaktīvs</option>
        </select><br>

        <button type="submit">Saglabāt</button>
    </form>
</x-layout>
