<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Edit event') }} {{ $event->title }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('events.update', $event) }}" method="post">
                    @csrf
                    @method('PUT')

                        <strong class="text-gray-700 pr-3">Title:</strong> <br>
                        <x-text-input  type="text" name="title" field="title" placeholder="Title..." class="w-full" autocomplete="off" :value="$event->title" />
            <br><br>
                        <strong class="text-gray-700 pr-3">Description:</strong> <br>
                        <x-text-input type="text" name="description" field="description" placeholder="Description..." class="w-full" autocomplete="off" :value="$event->description" />
            <br><br>
                        <strong class="text-gray-700 pr-3">Location:</strong> <br>
                        <select name="location" class="w-full rounded" autocomplete="off">
                            <option value="">Select a location</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}" {{ $event->location_id == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                            @endforeach
                        </select>
            <br><br>
                        <strong class="text-gray-700 pr-3">Event Date:</strong> <br>
                        <input class="rounded" type="date" name="event_date" id="event_date" value="{{ $event->event_date }}" required>
            <br><br>
                        <strong class="text-gray-700 pr-3">Start Time:</strong> <br>
                        <input class="rounded" type="time" name="start_time" id="start_time" value="{{ $event->start_time }}" required>
            <br><br>
                        <strong class="text-gray-700 pr-3">End Time:</strong> <br>
                        <input class="rounded" type="time" name="end_time" id="end_time" value="{{ $event->end_time }}" required>
            <br><br>
                    <button type="submit" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Opslaan</button>
                    <a href="{{ route('events.index') }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Terug</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
