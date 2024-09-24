<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('miranda/rooms', ['rooms' => $rooms]);
    }

    public function offers()
    {
        $rooms = Room::selectRaw('*, (price - offer) as discount')->orderByDesc('discount')->take(10)->get();
        return view('miranda/offers', ['rooms' => $rooms]);
    }

    public function home()
    {
        $rooms = Room::selectRaw('*, (price - offer) as discount')->orderByDesc('discount')->take(5)->get();
        return view('miranda/index', ['rooms' => $rooms]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('miranda/room-details', ['room' => $room]);
    }
}
