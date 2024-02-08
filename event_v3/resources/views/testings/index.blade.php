<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-xl">
            {{ __('Testing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php

                $cars = ["Audi", "bmw", "toyota"];
                $cars = [0 => "Audi", 1 => "bmw", 2 => "toyota"];
                $text = "Mijn droom auto is ";


                echo str_replace('droom', 'huidige', $text);
                echo ucfirst($cars[2]);

                function myCar($array = [], $key = 0)
                {
                    if ($array == [] ) {
                        return false;
                    }

                    if (array_key_exists($key, $array) == false) {
                        return false;
                    }


                    return ucfirst($array[$key]);
                }

                echo myCar($cars );


            ?>
        </div>
    </div>
</x-app-layout>
