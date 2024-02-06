<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('New event') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                <form action="{{ route('events.store') }}"method="post" >
                    @csrf
                    <strong>Title: <x-text-input type="text" name="title" field="title" placeholder="Title..." class="w-full border-black" autocomplete="off" :value="@old('title')"></x-text-input> </strong> <br> <br>
                    <strong>Description:  <x-text-input type="text" name="description" field="description" placeholder="Description..." class="w-full border-black" autocomplete="off" :value="@old('description')"></x-text-input> </strong> <br> <br>
                    <strong>Location:
                        <select name="location_id" class="w-full" autocomplete="off">
                            <option value="">Select a location</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </strong> <br> <br>
                    <strong>Event date: <br> <input type="date" name="event_date" placeholder="Date..." class="rounded" autocomplete="off" value="{{ old('event_date') }}"></strong> <br> <br>
                    <strong>Start time: <br> <input type="time" name="start_time" placeholder="Start time..." class="rounded" autocomplete="off" value="{{ old('start_time') }}"></strong> <br> <br>
                    <strong>End time: <br> <input type="time" name="end_time" placeholder="End time..." class="rounded" autocomplete="off" value="{{ old('end_time') }}"></strong> <br> <br>


                    <button type="submit" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Add event</button>
                    <a href="{{ route('events.index', $event->id)  }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Back</a>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
