<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-bold text-2xl mb-4 ml-16">Evenementen</h2> <!-- Titel toegevoegd -->

            <div x-data="{ openEventIndex: null }" x-cloak class="flex bg-white  ml-8 mr-8 shadow-xl rounded-xl">

{{--                <div class="flex m-4 font-sans font-bold text-xl">--}}
{{--                    <p>Evenementen </p>--}}
{{--                </div>--}}
                <div class="absolute flex m-4 ml-8 font-sans font-bold text-xl ">
                    <button @click="openEventIndex === null ? openEventIndex = {{ $events }} : openEventIndex = null" type="button" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                        <span x-show="openEventIndex === null">Show all events</span>
                        <span x-show="openEventIndex !== null">Show less events</span>
                    </button>
                </div>
                <div class="absolute m-4 ml-8 mt-16 font-sans font-bold text-xl ">
                    <a href="{{ route('events.create') }}" class="w-auto h-10 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Create event</a>

                </div>
                @foreach($events->take(4) as $event)
                    <div class=" w-full sm:w-1/2 md:w-1/4 px-2 mb-4 mt-20">
                        <div class="my-6 p-6  border-b border-gray-200 shadow-sm sm:rounded-lg">
                            <div class="event-item rounded-xl p-0.5">
                                <a href="{{ route('events.show', $event->id) }}">
                                    <p><img class="rounded-xl shadow-xl w-30" src="/Images/Car.png"></p>
                            </div>
                                    <p class="text-2xl"><strong> {{ $event->title }} </strong></p>
                                    <p class="text-gray-500 pt-0.5 pb-1"><strong>Locatie: {{ $event->location->name }} </strong> </p>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 mr-2">
                                            <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                                        </svg>
                                        <div class="font-sans">{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }} {{$event->start_time}}</div>
                                    </div>
                                </a>
                                    <button type="button" onclick="deleteOpenConfirmationPopup('{{ $event->id }}')" class="w-auto h-8 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Delete event</button>

                                    <div id="confirmationPopup-{{ $event->id }}" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;">
                                        <div class="bg-white p-8 rounded-md shadow-md">
                                            <p class="text-lg mb-4">Are you sure you want to delete this event?</p>
                                            <div class="flex justify-between">
                                                <button onclick="deleteCloseConfirmationPopup('{{ $event->id }}')" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Cancel</button>

                                                <form id="deleteForm-{{ $event->id }}" method="POST" action="{{ route('events.destroy', $event->id) }}" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                        </div>
                    </div>
                @endforeach





                <div x-show="openEventIndex !== null" x-cloak class="relative flex">
                    @foreach($events->slice(4) as $event)
                        <div >
                            <div class="my-6 p-6 border-b border-gray-200 shadow-sm sm:rounded-lg">
                                <a href="{{ route('events.show', $event->id) }}">
                                    <p><img class="rounded-xl shadow-xl w-30" src="/Images/Car.png"></p>
                                    <p class="text-2xl"><strong> {{ $event->title }} </strong></p>
                                    <p class="text-gray-500 pt-0.5 pb-1"><strong>Locatie: {{ $event->location->name }} </strong> </p>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 mr-2">
                                            <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                                        </svg>
                                        <div class="font-sans">{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }} {{$event->start_time}}</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

</x-app-layout>
<script>
    function deleteOpenConfirmationPopup(deleteId) {
        // Show the confirmation popup
        document.getElementById('confirmationPopup-' + deleteId).style.display = 'flex';
    }

    function deleteCloseConfirmationPopup(deleteId) {
        // Hide the confirmation popup
        document.getElementById('confirmationPopup-' + deleteId).style.display = 'none';
    }
</script>

<style>
    .event-item:hover {
        border: 2px solid blue;
    }

</style>
