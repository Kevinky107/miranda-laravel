<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Auth::user()->activities()->get();
        return view('activity/list', [
            'activities' =>  $activities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activity/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $activity = $request;
        $activity['user_id'] = auth()->id();

        $validated = $activity->validate([
            'type' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'date' => 'required|date',
            'paid' => 'boolean',
            'notes' => 'nullable|string'
        ]);

        $activity = Activity::create($validated);

        return redirect()->action([ActivityController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Auth::user()->activities()->where('id', $id)->first();

        return response()->json($activity, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Auth::user()->activities()->where('id', $id)->firstOrFail();

        return view('activity/edit', [
            'activity' =>  $activity
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Auth::user()->activities()->where('id', $id)->first();

        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'date' => 'required|date',
            'notes' => 'nullable|string',
            'satisfaction' => 'required|integer|min:0|max:10'
        ]);

        $validated['paid'] = $request->has('paid') ? true : false;

        $activity->update($validated);

        return redirect()->action([ActivityController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Auth::user()->activities()->where('id', $id)->first();

        $activity->delete();

        return redirect()->action([ActivityController::class, 'index']);
    }
}
