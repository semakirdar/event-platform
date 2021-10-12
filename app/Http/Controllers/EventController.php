<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
}
