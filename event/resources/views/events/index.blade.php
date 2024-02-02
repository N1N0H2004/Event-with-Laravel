<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('events.create') }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-1.5 px-3 rounded-lg transition duration-300 ease-in-out">+ Nieuwe strippenkaart toevoegen</a>

            @forelse($events as $event)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <p><strong>Event:</strong> {{ $event->title }}</p>
                    <p><strong>Locatie:</strong> {{ $event->locatie->name }}</p>
                    <p><strong>icon:</strong> {{ $event->event_date }} {{ $event->start_time }}</p>


                    <br>
                    <a href="{{ route('event.show', $event->id ) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1.5 px-3 rounded-lg transition duration-300 ease-in-out">Meer details</a>


                    <!-- Verwijderknop -->

                    <button type="button" onclick="deleteOpenConfirmationPopup('{{ $event->id }}')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded-lg transition duration-300 ease-in-out">Verwijderen</button>

                    <!-- Confirmation popup -->
                    <div id="confirmationPopup-{{ $event->id }}" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;">
                        <div class="bg-white p-8 rounded-md shadow-md">
                            <p class="text-lg mb-4">Weet je zeker dat je deze strippenkaart wilt verwijderen?</p>
                            <div class="flex justify-between">
                                <button onclick="deleteCloseConfirmationPopup('{{ $event->id }}')" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Annuleren</button>

                                <form id="deleteForm-{{ $event->id }}" method="POST" action="{{ route('strippenkaarts.destroy', $event->id) }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Bevestigen</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            @empty
                <p>Geen strippenkaarten beschikbaar...</p>
            @endforelse
            {{ $events->links() }}
        </div>
    </div>

    <script>
        function deleteOpenConfirmationPopup(artikelId) {
            // Show the confirmation popup
            document.getElementById('confirmationPopup-' + artikelId).style.display = 'flex';
        }

        function deleteCloseConfirmationPopup(artikelId) {
            // Hide the confirmation popup
            document.getElementById('confirmationPopup-' + artikelId).style.display = 'none';
        }
    </script>
</x-app-layout>
