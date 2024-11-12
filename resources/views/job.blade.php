<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">Job Title: {{ $job["title"] }}</h2>
    <p>
        Salary: {{ $job["salary"] }}
    </p>
</x-layout>