<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Lapa' }}</title>
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Testa Logo</h1>
        </header>

        <aside class="sidebar-left">
            <nav>
                <ul>
                    <li><a href="{{ route('products.index') }}">Produkti</a></li>
                    <li><a href="#">Cita saite</a></li>
                    <li><a href="#">Vēl saite</a></li>
                </ul>
            </nav>
        </aside>

        <main class="content">
            {{ $slot }}
        </main>

        <aside class="sidebar-right">
            <p>Testa reklāmas teksts</p>
        </aside>

        <footer class="footer">
            <p>&copy; 2025 Testa uzņēmums</p>
        </footer>
    </div>
</body>
</html>
