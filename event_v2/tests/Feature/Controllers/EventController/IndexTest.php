<?php

use Inertia\Testing\AssertableInertia;
use function Pest\Laravel\get;
use \App\Models\Event;
use \App\Http\Resources\EventResource;

it(' should return the correct component', function () {
    get(route('events.index'))
        ->assertInertia(fn (AssertableInertia $inertia) => $inertia
            ->component('Events/Index', true)
    );
});

it('passes events to the view', function () {
    get(route('events.index'))
        ->assertInertia(fn (AssertableInertia $inertia) => $inertia
            ->has('events')
        );
});
