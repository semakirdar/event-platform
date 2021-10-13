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




}
