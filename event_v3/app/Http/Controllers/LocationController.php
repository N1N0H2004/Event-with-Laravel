<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Location;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all()->sortBy('created_at');

        return view('locations.index', compact('locations'));
    }

    public function show(Location $location)
    {
        return view('locations.show', compact('location'));

    }

    public function create(Location $location)
    {
        return view('locations.create', compact('location'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $location = Location::create([
            'name' => $request->name,

        ]);

        // Redirect to a confirmation page or somewhere else
        return redirect()->route('locations.index')->with('success', 'Event created successfully.');
    }

    public function destroy(Location $location)
    {
        try {
            $location->delete();
            return redirect()->route('locations.index')->with('message', 'Location delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('message', 'An error occurred while deleting the location.');
        }
    }
}
