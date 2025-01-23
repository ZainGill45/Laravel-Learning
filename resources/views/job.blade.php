<x-layout>
    <x-slot:heading>
        Job - {{ $job['title'] }}
    </x-slot:heading>

    <h2 class="font-bold text-3xl">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
