<?php

use App\Models\Locatie;
use Inertia\Testing\AssertableInertia;
use function Pest\Laravel\get;
use \App\Models\Event;
use \App\Http\Resources\EventResource;
use \App\Http\Resources\LocatieResource;


it('can show a event', function() {
    $post = Event::factory()->create();

    get(route('events.show', $post))
        ->assertComponent('Events/Show');
});

it('passes a event to the view', function() {
    $event = Event::factory()->create();

    $event->load('user');

    get(route('events.show', $event))
        ->assertHasResource('event', EventResource::make($event));
});

//it('passes a locatie to the view', function() {
//    $event = Event::factory()->create();
//    $locaties = Locatie::factory(2)->for($event)->create();
//
//    $locaties->load('user');
//
//    get(route('events.show', $event))
//        ->assertHasPaginatedResource('locaties', LocatieResource::collection($locaties->reverse()));
//});
