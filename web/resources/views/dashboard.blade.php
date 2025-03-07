<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-bold mb-4">Uploaded Research Documents</h3>

                    <!-- Search Form -->
                    <form action="{{ route('dashboard') }}" method="GET" class="mb-4">
                        <input type="text" name="search" placeholder="Search by title or department"
                            class="w-full p-2 border rounded" value="{{ request('search') }}">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">
                            Search
                        </button>
                    </form>

                    @forelse($documents as $department => $docs)
                        <h4 class="mt-4 font-semibold">{{ $department }}</h4>
                        <ul class="list-disc pl-6">
                            @foreach($docs as $document)
                                <li>
                                    <a href="{{ asset('storage/'.$document->file_path) }}" target="_blank"
                                        class="text-blue-600 hover:underline">
                                        {{ $document->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @empty
                        <p class="text-gray-500">No research documents found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
