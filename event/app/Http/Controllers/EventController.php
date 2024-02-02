<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function Index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $events = Event::all()->sortBy('events_id');

        return view('events.index', compact('events'));
    }
}
