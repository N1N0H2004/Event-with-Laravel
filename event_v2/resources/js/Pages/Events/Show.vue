<template>
    <AppLayout>
        <ul class="flex bg-white mt-12 ml-8 mr-8 rounded-xl">
            <strong class="absolute m-4 font-sans text-xl">Events</strong>
            <strong class="absolute m-4 ml-32 font-sans text-xl">Go back</strong>
            <div class="w-1/4 p-4 m-4 mt-12 bg-amber-50">
                <p><strong class="font-700"> {{ event.title }} </strong> </p>
<!--                <p><strong class="font-700"> Locatie: {{ event.locatie.name }} </strong></p>-->
<!--                <p><strong class="font-700"> Icon: {{ event.event_date }} {{ event.start_time }} </strong></p>-->

                <p><strong></strong></p>
                <p><strong></strong></p>

            </div>
        </ul>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps(['event']);
</script>

