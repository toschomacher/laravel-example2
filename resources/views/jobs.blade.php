<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li class="text-gray-900 dark:text-gray-300 hover:underline hover:text-blue-500">
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}:</strong>: Pays {{ $job['salary'] }} per yer.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>