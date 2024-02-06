<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Event')  }} {{ $event->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!--  -->

            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-blue-400 text-xl">
                    <strong>Event info</strong>
                </h2>
                <div class="text">
                    <p><img class="rounded-xl w-40" src="/Images/Car.png" alt=""></p>
                    <p><strong>Title: </strong> {{ $event->title }}</p>
                    <p><strong>Location: </strong> {{ $event->location->name }}</p>
                    <p><strong>Description: </strong> {{ $event->description }}</p>
                    <p><strong>Date: </strong> {{ $event->event_date }}</p>
                    <p><strong>Time: </strong> {{ $event->start_time }} {{ $event->end_time }}</p>



                    <br>
                    <a href="{{ route('events.index', $event->id)  }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1.5 px-3 rounded-lg transition duration-300 ease-in-out">Back</a>

                </div>
            </div>
        </div>
</x-app-layout>
