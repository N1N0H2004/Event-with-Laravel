<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Testing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="numbers">
                @for ($i = 1; $i <= 50; $i++)
                    <div class="number">{{ $i }} </div>
                    @if ($i % 4 != 0)
                        <!-- Add space after every number except the last number in a row -->
                        <span>&nbsp;</span>
                    @endif
                @endfor
            </div>
        </div>
    </div>
</x-app-layout>
