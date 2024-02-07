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


        return view('events.index', compact('events'))->with('alert', 'You are now on the Events page.');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));

    }

    public function create(Event $event)
    {
        $locations = Location::all();
        return view('events.create', compact('event', 'locations'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'location_id' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $user = auth()->user();


        Event::create([
            'title' => $request->title,
            'location_id' => $request->location_id,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'user_id' => $user->id,

        ]);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }


    public function destroy(Event $event)
    {
        try {
            $event->delete();
            return redirect()->route('events.index')->with('warning', 'Event delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('info', 'An error occurred while deleting the event.');
        }
    }

    public function edit(Event $event)
    {
        $locations = Location::all();

        return view('events.edit', compact('event', 'locations'));

    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $event->update([
            'title' => $request->title,
            'location' => $request->location,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);


        return redirect()->route('events.show', $event->id)->with('info', 'Location edited successfully.');
    }
}
