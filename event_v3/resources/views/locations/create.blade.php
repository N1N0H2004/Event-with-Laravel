<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('New location') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                <form action="{{ route('locations.store') }}" method="post" >
                    @csrf
                    <strong>Location: <x-text-input type="text" name="name" field="name" placeholder="Location..." class="w-full border-black" autocomplete="off" :value="@old('name')"></x-text-input> </strong> <br> <br>
                    @error('name')
                    <p class="text-red-500 -mt-6">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Add location</button>
                    <a href="{{ route('locations.index', $location->id)  }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Back</a>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
