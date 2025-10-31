<x-layout :title="'Izveidot produktu'">
    <x-flash-success class="mb-4"/>
    <x-flash-errors class="mb-4"/>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nosaukums" value="{{ old('name') }}" required>
        <input type="number" name="quantity" placeholder="Daudzums" value="{{ old('quantity') }}" required>
        <input type="text" name="description" placeholder="Apraksts" value="{{ old('description') }}">
        <input type="number" step="0.01" name="price" placeholder="Cena" value="{{ old('price') }}" required>
        <input type="date" name="expiration_date" value="{{ old('expiration_date') }}">
        <select name="status" required>
            <option value="active" @selected(old('status')=='active')>Aktīvs</option>
            <option value="inactive" @selected(old('status')=='inactive')>Neaktīvs</option>
        </select>
        <button type="submit">Izveidot</button>
    </form>
</x-layout>
