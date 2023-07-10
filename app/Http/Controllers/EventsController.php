<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;


class EventsController extends Controller
{
    public function index()
    {
        // $menu = "Radio Suara batu bara";
        $events = Event::orderBy('id', 'desc')->latest()->paginate(9);
        return view('events', compact('events'));
    }
}
