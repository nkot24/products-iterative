
@if ($errors->any())
        <div {{ $attributes->merge(['class' => 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative']) }} role="alert">
            <strong class="font-bold">Kļūda! </strong>
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

