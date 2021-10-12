<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function create($eventId)
    {
        $event = Event::query()->where('id', $eventId)->first();

        return view('participantCreate', [
            'event' => $event
        ]);
    }

    public function store(Request $request)
    {
        $participant = Participant::query()->create([
            'name' => $request->name,
            'title' => $request->title,
            'company' => $request->company,
            'event_id' => $request->event_id
        ]);

        $participant->addMediaFromRequest('image')->toMediaCollection();
        return redirect()->route('event.detail', ['id' => $request->event_id]);
    }
}
