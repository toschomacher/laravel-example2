<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="text-gray-900 dark:text-gray-300"><strong>{{ $job['title'] }}</strong></h2>
    <p class="text-gray-900 dark:text-gray-300">
        This job pays {{ $job['salary'] }} per yer.
    </p>
</x-layout>