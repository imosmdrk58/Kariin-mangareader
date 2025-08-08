<x-app-layout>
    <div class="max-w-7xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Daftar Manga</h1>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach($mangas as $manga)
                <a href="{{ route('manga.show', $manga) }}" class="bg-white rounded-lg shadow p-2 hover:shadow-lg transition">
                    <img src="{{ asset('storage/' . $manga->cover) }}" alt="{{ $manga->title }}" class="rounded mb-2 w-full h-48 object-cover">
                    <h2 class="font-semibold text-center">{{ $manga->title }}</h2>
                </a>
            @endforeach
        </div>
        <div class="mt-6">
            {{ $mangas->links() }}
        </div>
    </div>
</x-app-layout>
