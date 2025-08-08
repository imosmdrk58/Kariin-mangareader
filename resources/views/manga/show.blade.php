<x-app-layout>
    <div class="max-w-5xl mx-auto py-8">
        <div class="flex items-center gap-6">
            <img src="{{ asset('storage/' . $manga->cover) }}" class="w-40 rounded shadow">
            <div>
                <h1 class="text-3xl font-bold">{{ $manga->title }}</h1>
                <p class="text-gray-700 mt-2">{{ $manga->description }}</p>
                <p class="text-sm text-gray-500 mt-1">Author: {{ $manga->author }}</p>
            </div>
        </div>

        <h2 class="text-xl font-semibold mt-8 mb-4">Chapter List</h2>
        <ul class="space-y-2">
            @foreach($chapters as $chapter)
                <li>
                    <a href="{{ route('chapter.read', [$chapter, 1]) }}" class="block p-3 bg-white rounded shadow hover:bg-gray-50">
                        Chapter {{ $chapter->chapter_number }} - {{ $chapter->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
