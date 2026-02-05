<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">  
        @foreach ($articles as $article)
            <a href="{{ $article->url }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm"> {{ $article->journalist->name }} </div>

                <div>
                    <strong> {{ $article->headline }} </strong>
                    <h1> {{ $article->abstract }} </h1>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>