<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('dashboard.admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'Event_Title' => 'required|string|max:255',
            'Event_Content' => 'required|string',
            'Publication_Date' => 'required|date',
            'Event_Image' => 'nullable|image|max:2048',
        ]);

        // Prepare data for storage
        $data = $validated;
        $data['user_id'] = 1;

        // Handle file upload if an image is provided
        if ($request->hasFile('Event_Image')) {
            $data['Event_Image'] = $request->file('Event_Image')->store('images/events', 'public');
        }

        // Create the event
        Event::create($data);

        // Redirect to the event index page with a success message
        return redirect()->route('admin.event.index')->with('success', 'Event added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('dashboard.admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'Event_Title' => 'required|string|max:255',
            'Event_Content' => 'required|string',
            'Publication_Date' => 'required|date',
            'Event_Image' => 'nullable|image|max:2048',
        ]);

        // Prepare data for storage
        $data = $validated;
        $data['user_id'] = 1;

        if ($request->hasFile('Event_Image')) {
            // Hapus gambar lama jika ada
            if ($event->Event_Image) {
                Storage::disk('public')->delete($event->Event_Image);
            }

            $data['Event_Image'] = $request->file('Event_Image')->store('images/events', 'public');
        }

        $event->update($data);

        return redirect()->route('admin.event.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->Event_Image && Storage::exists('public/' . $event->Event_Image)) {
            Storage::delete('public/' . $event->Event_Image);
        }

        // Hapus program dari database
        $event->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.event.index')->with('success', 'Event deleted successfully.');
    }
}
