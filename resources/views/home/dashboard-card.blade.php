@props(['title', 'route'])

<a href="{{ route($route) }}"
    class="block p-6 bg-red-700 rounded-lg shadow-lg hover:bg-red-800 transition-colors text-white">
    <h2 class="text-2xl font-semibold">{{ $title }}</h2>
    {{ $slot }}
</a>

{{-- Example usage in home.blade.php --}}
<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <x-dashboard-card title="Gouvernor" route="gouvernor">
            {{-- Add any additional content for the card here --}}
        </x-dashboard-card>

        <x-dashboard-card title="Elector" route="elector">
            {{-- Add any additional content for the card here --}}
        </x-dashboard-card>

        <x-dashboard-card title="State" route="state">
            {{-- Add any additional content for the card here --}}
        </x-dashboard-card>

        <x-dashboard-card title="Rapport" route="rapport">
            {{-- Add any additional content for the card here --}}
        </x-dashboard-card>
    </div>
</x-layout>
