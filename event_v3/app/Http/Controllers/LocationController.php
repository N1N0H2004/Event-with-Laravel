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

        return view('locations.index', compact('locations'))->with('alert', 'You are now on the Locations page.');
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


        return redirect()->route('locations.index')->with('success', 'Location created successfully.');
    }

    public function destroy(Location $location)
    {
        try {
            $location->delete();
            return redirect()->route('locations.index')->with('warning', 'Location delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('info', 'An error occurred while deleting the location.');
        }
    }

    public function edit(Location $location)
    {

        return view('locations.edit', compact('location'));

    }

    public function update(Request $request, Location $location)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $location->update([
            'name' => $request->name,
        ]);

        return redirect()->route('locations.index', $location->id)->with('info', 'Location edited successfully.');
    }
}
