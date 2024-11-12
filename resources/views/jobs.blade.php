<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <ul>    
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job["id"] }}" class="hover:underline">
                Title: {{ $job["title"]}} Pays: {{ $job["salary"] }}
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>