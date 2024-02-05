<template>
    <AppLayout>
        <ul class="flex bg-white mt-12 ml-8 mr-8 rounded-xl">
            <strong class="absolute m-4 font-sans text-xl">Events</strong>
            <strong class="absolute m-4 ml-32 font-sans text-xl">Show all events</strong>
            <div v-for="(event, index) in events.slice(0, 4)" :key="event.id" class="w-1/4 p-4 m-4 mt-12 bg-amber-50">
                <li>
                    <link :href="route('events.show', event.id)">
                        <p><img src="/Images/Car.png"> </p>
                        <p><strong class="font-700"> {{ event.title }} </strong> </p>
                        <p><strong class="font-700"> Locatie: {{ event.locatie.name }} </strong></p>
                        <p><strong class="font-700"> Icon: {{ event.event_date }} {{ event.start_time }} </strong></p>
                    </link>
                </li>


            </div>
        </ul>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps(['events']);
</script>

