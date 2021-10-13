<?php

namespace App\Http\Controllers;

use App\Http\Requests\Events\StoreRequest;
use App\Http\Requests\Events\UpdateRequest;
use App\Models\Event;
use App\Models\Location;
use App\Models\Participant;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index($categoryId)
    {
        $events = Event::query()->where('category_id', $categoryId)->get();
        return view('Events.index', [
            'events' => $events,
            'selectedCategoryId' => $categoryId
        ]);
    }

    public function detail($id)
    {
        $participants = Participant::query()->where('event_id', $id)->get();
        $event = Event::query()->where('id', $id)->first();
        return view('Events.detail', [
            'event' => $event,
            'participants' => $participants
        ]);
    }

    public function list()
    {
        $events = Event::query()->with('category')->get();
        return view('Events.list', [
            'events' => $events
        ]);
    }

    public function edit($eventId)
    {
        $event = Event::query()->where('id', $eventId)->first();

        return view('Events.edit', [
            'event' => $event
        ]);
    }

    public function update($id, UpdateRequest $request)
    {
        $checkLocation = Location::query()
            ->where('name', $request->location)
            ->first();
        if ($checkLocation) {
            $locationId = $checkLocation->id;
        } else {
            $location = Location::query()->create([
                'name' => $request->location
            ]);

            $locationId = $location->id;
        }
        $event = Event::query()->where('id', $id)->first();
        $event->title = $request->title;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->description = $request->description;
        $event->location_id = $locationId;

        if ($request->has('image') && !empty($request->image)) {
            $media = $event->getFirstMedia();
            if ($media)
                $media->delete();
            $event->addMediaFromRequest('image')->toMediaCollection();
        }

        $event->save();
        return redirect()->route('event.list');
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
        if ($checkLocation) {
            $locationId = $checkLocation->id;
        } else {
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

    public function locationEvent($locationId)
    {
        $events = Event::query()->where('location_id', $locationId)->get();
        return view('Events.locationEvent', [
            'events' => $events
        ]);

    }

}
