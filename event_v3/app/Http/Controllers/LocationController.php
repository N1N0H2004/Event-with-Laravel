<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocationRequest;
use App\Models\Event;
use App\Models\Location;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all()->sortBy('created_at');
        $alert = "You are now on the location page.";

        return view('locations.index', compact('locations', 'alert'));
    }

    public function show(Location $location)
    {
        return view('locations.show', compact('location'));

    }

    public function create(Location $location)
    {
        return view('locations.create', compact('location'));
    }

    public function store(StoreLocationRequest  $request)
    {

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
            return redirect()->back()->with('warning', 'An error occurred while deleting the location.');
        }
    }

    public function edit(Location $location)
    {

        return view('locations.edit', compact('location'));

    }

    public function update(StoreLocationRequest $request, Location $location)
    {

        $location->update([
            'name' => $request->name,
        ]);

        return redirect()->route('locations.index', $location->id)->with('info', 'Location edited successfully.');
    }
}
