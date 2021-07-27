<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(EventRequest $request)
    {
        $events = Event::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('events', $request->file('file'));
            $events->image()->create([
                'url' => $url
            ]);
        }
        return redirect('/home');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
}
