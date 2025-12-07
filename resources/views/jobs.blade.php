<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li class="text-gray-900 dark:text-gray-300"> <strong>{{ $job['title'] }}:</strong>: Pays {{ $job['salary'] }} per yer.</li>
        @endforeach
    </ul>
</x-layout>