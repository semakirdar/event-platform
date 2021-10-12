<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index($categoryId)
    {
        $events = Event::query()->where('category_id', $categoryId)->get();
        return view('Events.index', [
            'events' => $events
        ]);
    }
}
