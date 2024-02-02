<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-blue-400 text-xl">
                    <strong>Users gegevens</strong>
                </h2>
                @foreach ($users as $userItem)
                    <div class="text">
                        <p>
                            <div>
                                <strong>Name: </strong> {{ $userItem->name }}
                            </div>
                                <strong class="ml-6">Email: </strong> {{ $userItem->email }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
