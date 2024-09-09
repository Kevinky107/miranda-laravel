<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return response()->json($activities, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createActivity');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'datetime' => 'required|date',
            'paid' => 'boolean',
            'notes' => 'nullable|string'
        ]);

        $activity = Activity::create($validated);

        return response()->json($activity, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::find($id);

        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], 404);
        }

        return response()->json($activity, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);

        return view('editActivity', [
            'activity' =>  $activity
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'type' => 'sometimes|required|string|max:255',
            'user_id' => 'sometimes|required|integer',
            'datetime' => 'sometimes|required|date',
            'paid' => 'sometimes|required|boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10'
        ]);

        $activity = Activity::find($id);

        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], 404);
        }

        $activity->update($validated);

        return response()->json($activity, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::find($id);

        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], 404);
        }

        $activity->delete();

        return response()->json(['message' => 'Activity deleted successfully'], 200);
    }
}
