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
        return view('events.create', compact('event'));

    }

    public function destroy(Event $event)
    {
        try {
            // Use the delete method to remove the event
            $event->delete();

            // Redirect with a success message
            return redirect()->route('events.index')->with('message', 'Event deletedw successfully!');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect()->back()->with('message', 'An error occurred while deleting the event.');
        }
    }
}
