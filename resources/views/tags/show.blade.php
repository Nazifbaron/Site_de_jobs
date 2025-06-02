<x-layout>
    <h1 class="text-2xl font-bold mb-4">Jobs pour le tag : {{ $tag->name }}</h1>

    <div class="grid lg:grid-cols-3 gap-6">
        @forelse ($jobs as $job)
            <x-job-card :$job />
        @empty
            <p>Aucun job trouvé pour ce tag.</p>
        @endforelse
    </div>
</x-layout>
