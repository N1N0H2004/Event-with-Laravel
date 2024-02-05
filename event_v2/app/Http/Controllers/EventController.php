<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocatieResource;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
//        dd(Event::all());
        return inertia('Events/Index', [
            'events' => Event::all(),
//          'events' => EventResource::collection(Event::with('user')->latest()->latest('id')->paginate()),
        ]);
    }

    public function show(Event $event)
    {
        $event->load('user');

        return inertia('Events/Show', [
            'event' => fn () => EventResource::make($event),
            'locaties' => fn () => LocatieResource::collection($event->locatie()->with('user')->latest()->latest('id')),
        ]);
    }
}
