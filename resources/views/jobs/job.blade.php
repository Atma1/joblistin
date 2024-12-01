<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">Job Title: {{ $job->title }}</h2>
    <p>
        Salary: {{ $job["salary"] }}
    </p>
    <p class="mt-6">
        <x:button href="/jobs/{{ $job->id }}/edit">Edit Job</x:button>
    </p>
</x-layout>