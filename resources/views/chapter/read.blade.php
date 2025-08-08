<x-app-layout>
    <div class="max-w-4xl mx-auto py-8 text-center">
        <h1 class="text-lg font-semibold mb-4">
            {{ $chapter->manga->title }} - Chapter {{ $chapter->chapter_number }}
        </h1>

        <img src="{{ asset('storage/' . $page->image) }}" class="mx-auto max-w-full rounded shadow">

        <div class="flex justify-between mt-6">
            @if($currentPage > 1)
                <a href="{{ route('chapter.read', [$chapter, $currentPage - 1]) }}" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                    Prev
                </a>
            @else
                <div></div>
            @endif

            @if($currentPage < $totalPages)
                <a href="{{ route('chapter.read', [$chapter, $currentPage + 1]) }}" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                    Next
                </a>
            @endif
        </div>
    </div>
</x-app-layout>
