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

                <div class="text">
                    <p><img class="rounded-xl w-60" src="/Images/Car.png" alt=""></p>
                    <p><strong>Title: </strong> {{ $event->title }}</p>
                    <p><strong>Location: </strong> {{ $event->location->name }}</p>
                    <p><strong>Description: </strong> {{ $event->description }}</p>
                    <p><strong>Date: </strong> {{ \Carbon\Carbon::parse($event->event_date)->format('d-m-Y') }}</p>
                    <p><strong>Time: </strong> {{ $event->start_time }} {{ $event->end_time }}</p>



                    <br>
                    <a href="{{ route('events.index', $event->id)  }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Back</a>

                </div>
            </div>
        </div>
</x-app-layout>
