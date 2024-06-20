<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inventarios</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="../css/app.css">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav>
            <ul>
                <li>
                    <a href="/products">Products</a>
                    <a href="/orders">Orders</a>
                    <a href=""></a>
                </li>
            </ul>
        </nav>
        <main>
            @yield('content')
        </main>
    </body>
</html>