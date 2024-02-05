<template>
    <AppLayout>
            <ul class="flex bg-white mt-12 ml-8 mr-8 overflow-hidden shadow-xl rounded-xl">
                <strong class="absolute m-4 font-sans text-xl">Events</strong>
                <div v-for="(event, index) in events.slice(0, 4)" :key="event.id" class="w-1/4 p-4 m-4 mt-12 ">
                    <li>
                        <Link :href="route('events.show', event.id)" class="block group px-2 py-4">
                            <p><img class="rounded-xl" src="/Images/Car.png" alt=""></p>
                            <p><strong class="font-700"> {{ event.title }} </strong></p>
                            <p><strong class="font-700"> Locatie: {{ event.locatie.name }} </strong></p>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5">
                                    <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                                </svg>
                                <strong> {{ event.event_date }} {{ event.start_time }}</strong>
                            </div>
                        </Link>
                    </li>
                </div>
            </ul>
        <div class="w-full text-center mt-4">
            <strong class="text-xl">Show all events</strong>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
defineProps(['events']);
</script>
