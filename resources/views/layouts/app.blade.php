<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>Laravel Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold mb-6">Todo Application</h1>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
