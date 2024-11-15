<aside class="w-64 bg-indigo-900 text-white min-h-screen">
    <div class="p-4">
        <div class="flex items-center gap-2 mb-8">
            <img src="{{ asset('images/usa-flag.png') }}" alt="USA Flag" class="w-8 h-6">
            <h1 class="text-xl font-semibold">USA Elections</h1>
        </div>

        <nav class="space-y-2">
            @php
                $links = [
                    'home' => 'Home',
                    'gouvernor' => 'Gouvernor',
                    'elector' => 'Elector',
                    'state' => 'State',
                    'rapport' => 'Rapport',
                    'statistiques' => 'Statistiques',
                ];
            @endphp

            @foreach ($links as $route => $label)
                <a href="{{ route($route) }}"
                    class="block py-2 px-4 rounded-lg {{ $active === $route ? 'bg-green-600 text-white' : 'hover:bg-indigo-800' }}">
                    {{ $label }}
                </a>
            @endforeach
        </nav>
    </div>

    <div class="mt-auto p-4">
        <a href="{{ route('disconnect') }}" class="block py-2 px-4 text-white hover:bg-indigo-800 rounded-lg">
            Disconnect
        </a>
    </div>
</aside>
