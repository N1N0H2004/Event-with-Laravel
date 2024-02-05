<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div x-data="{ openEventIndex: null }" x-cloak  class="events-container w-1/4 p-4 m-4 mt-12 "> //flex bg-white mt-12 ml-8 mr-8 overflow-hidden shadow-xl rounded-xl voeg dit toe om er 4 naast elkaar te hebben
                @foreach($events->take(4) as $event)
                    <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
                        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                            <a href="{{ route('events.show', $event->id) }}">
                                <p><img class="rounded-xl w-20" src="/Images/Car.png" alt=""></p>
                                <p><strong>Event:</strong> {{ $event->title }}</p>
                                <p><strong>icon:</strong> {{ $event->event_date }} {{ $event->start_time }}</p>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5">
                                        <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                                    </svg>
                                    <strong> {{ $event->event_date }} {{ $event->start_time }}</strong>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

                <div x-show="openEventIndex !== null" x-cloak>
                    @foreach($events->slice(4) as $event)
                        <div class="w-full sm:w-1/2 md:w-1/4 px-2 mb-4">
                            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                                <a href="{{ route('events.show', $event->id) }}">
                                    <p><img class="rounded-xl w-20" src="/Images/Car.png" alt=""></p>
                                    <p><strong>Event:</strong> {{ $event->title }}</p>
                                    <p><strong>icon:</strong> {{ $event->event_date }} {{ $event->start_time }}</p>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5">
                                            <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                                        </svg>
                                        <strong> {{ $event->event_date }} {{ $event->start_time }}</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button @click="openEventIndex === null ? openEventIndex = {{ $events }} : openEventIndex = null" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 mt-5 focus:ring-offset-2">
                    <span x-show="openEventIndex === null">More</span>
                    <span x-show="openEventIndex !== null">Show less</span>
                </button>

                {{--                <div class="w-full text-center mt-4">--}}
{{--                    <button id="toggle-events" class="">--}}
{{--                        Hide all events--}}
{{--                    </button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

</x-app-layout>
