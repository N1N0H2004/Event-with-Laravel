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
                    <button type="submit" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Save</button>
                    <a href="#" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center" onclick="editOpenConfirmationPopup(event)">Back</a>

                    <!-- Confirmation popup -->
                    <div id="confirmationPopup" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;">
                        <div class="bg-white p-8 rounded-md shadow-md w-1/2 flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="124"  viewBox="0 0 448 512"><path fill="#ff0000" d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112v25.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V208c0-61.9 50.1-112 112-112zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"/></svg>
                            <p class="text-lg mb-4 text-center">Are you sure you want to leave the changes?<br>Unsaved changes will be lost.</p>
                            <div class="flex justify-center w-full">
                                <a href="#" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center mr-2" onclick="editCloseConfirmationPopup()">Cancel</a>
                                <a href="{{ route('locations.index') }}" class="w-auto bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center ml-2">Confirm</a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


<script>
    function confirmSaveChanges() {
        var terugButton = document.activeElement;
        if (terugButton.tagName === 'A' && terugButton.getAttribute('href') === '#') {
            document.getElementById('confirmationPopup').style.display = 'flex';
            return false;
        }
        return true;
    }

    function editOpenConfirmationPopup(event) {
        event.preventDefault();
        document.getElementById('confirmationPopup').style.display = 'flex';
    }

    function editCloseConfirmationPopup() {
        document.getElementById('confirmationPopup').style.display = 'none';
    }
</script>
