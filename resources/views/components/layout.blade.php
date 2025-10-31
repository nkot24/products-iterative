<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Products' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="holy-grail">
        <header class="header">Logo</header>
        <nav class="left-sidebar">
            <ul>
                <li><a href="{{ route('products.index') }}">Produkti</a></li>
                <li><a href="{{ route('products.create') }}">Jauns Produkts</a></li>
            </ul>
        </nav>
        <main class="content">
            {{ $slot }}
        </main>
        <aside class="right-sidebar">Reklāma</aside>
        <footer class="footer">© 2025 Products Iterative</footer>
    </div>
</body>
</html>
