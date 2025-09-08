<x-layout>
    <x-slot name="heading"> {{ $job['title'] }}</x-slot>
    <div class="max-w-2xl mx-auto my-4 p-4 bg-white shadow-md rounded-lg">
        <p class="text-gray-700 mb-1">
            This position is offered by <span class="font-semibold">{{ $job['company'] }}</span>.
        </p>
        <p class="text-gray-700 mb-1">
            The role is based in <span class="font-semibold">{{ $job['location'] }}</span>.
        </p>
        <p class="text-gray-700 mb-1">
            The salary for this position is <span class="font-semibold">{{ $job['salary'] }}</span>.
        <p class="text-gray-700 mb-4">Your main task is {{ $job['description'] }}</p>
    </div>
</x-layout>