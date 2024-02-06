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

    public function create(Event $event)
    {
        $locations = Location::all();
        return view('events.create', compact('event', 'locations'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $user = auth()->user();

        $event = Event::create([
            'title' => $request->input('title'),
            'location' => $request->input('location'),
            'description' => $request->input('description'),
            'event_date' => $request->input('event_date'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'user_id' => $user->id,
        ]);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }



    public function destroy(Event $event)
    {
        try {
            $event->delete();
            return redirect()->route('events.index')->with('message', 'Event delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'An error occurred while deleting the event.');
        }
    }
}
