<?php

namespace App\Http\Controllers;

use App\Http\Requests\Events\StoreRequest;
use App\Models\Category;
use App\Models\Event;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::query()
            ->with('location')
            ->orderBy('start_date', 'ASC')
            ->get();
        return view('home', [
            'events' => $events
        ]);
    }

    public function create()
    {
        return view('Events.create');
    }

    public function store(StoreRequest $request)
    {
        $checkLocation = Location::query()
            ->where('name', $request->location)
            ->first();
        if($checkLocation){
            $locationId = $checkLocation->id;
        }
        else{
            $location = Location::query()->create([
                'name' => $request->location
            ]);

            $locationId = $location->id;
        }

        $event = Event::query()->create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'location_id' => $locationId,
            'category_id' => $request->category_id,
        ]);

        $event->addMediaFromRequest('image')->toMediaCollection();
        return redirect()->route('home');
    }
}
