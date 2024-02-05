<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Location;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all()->sortBy('events_id');

        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));

    }
}
