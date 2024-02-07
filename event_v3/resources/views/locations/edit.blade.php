<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Edit location') }} {{ $location->name }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('locations.update', $location) }}" method="post">
                    @csrf
                    @method('PUT')

                    <strong class="text-gray-700 pr-3">Location:</strong> <br>
                    <x-text-input  type="text" name="name" field="name" placeholder="Location..." class="w-full" autocomplete="off" :value="$location->name" />
            <br><br>
                    <button type="submit" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Opslaan</button>
                    <a href="{{ route('locations.index') }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Terug</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
