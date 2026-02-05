<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">  
        @foreach ($webpages as $webpage)
            <a href="{{ $webpage->url }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm"> {{ $webpage->name }} </div>
            </a>
        @endforeach
    </div>
</x-layout>