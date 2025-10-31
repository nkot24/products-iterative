<x-layout :title="'Rediģēt produktu'">
    <x-flash-success class="mb-4"/>
    <x-flash-errors class="mb-4"/>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
        <input type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}" required>
        <input type="text" name="description" value="{{ old('description', $product->description) }}">
        <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required>
        <input type="date" name="expiration_date" value="{{ old('expiration_date', $product->expiration_date) }}">
        <select name="status" required>
            <option value="active" @selected(old('status', $product->status)=='active')>Aktīvs</option>
            <option value="inactive" @selected(old('status', $product->status)=='inactive')>Neaktīvs</option>
        </select>
        <button type="submit">Saglabāt izmaiņas</button>
    </form>
</x-layout>
