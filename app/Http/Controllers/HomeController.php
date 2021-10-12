<?php

namespace App\Http\Controllers;

use App\Http\Requests\Events\StoreRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::query()
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
        $event = Event::query()->create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'location' => $request->location,
            'category_id' => $request->category_id
        ]);

        $event->addMediaFromRequest('image')->toMediaCollection();
        return redirect()->route('home');
    }
}
