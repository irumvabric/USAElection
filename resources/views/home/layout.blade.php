<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'USA Elections' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-cream-50">
    <div class="flex min-h-screen">
        <x-sidebar />
        <main class="flex-1 p-8">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
