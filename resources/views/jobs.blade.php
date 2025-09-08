<x-layout>
    <x-slot name="heading">Jobs List</x-slot>
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block hover:bg-gray-100 transition duration-200">
            <div class="max-w-2xl mx-auto my-4 p-4 bg-white shadow-md rounded-lg">
                <h2 class="text-xl font-bold mb-2">{{ $job['title'] }}</h2>
                <p class="text-gray-700 mb-1"><span class="font-semibold">Company:</span> {{ $job['company'] }}</p>
                <p class="text-gray-700 mb-1"><span class="font-semibold">Location:</span> {{ $job['location'] }}</p>
                <p class="text-gray-700 mb-1"><span class="font-semibold">Salary:</span> {{ $job['salary'] }}</p>
                <p class="text-gray-700 mb-4">{{ $job['description'] }}</p>
            </div>
        </a>
    @endforeach
</x-layout>
