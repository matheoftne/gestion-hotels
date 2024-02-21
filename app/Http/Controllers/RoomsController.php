<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $rooms->transform(function ($room) {
            $hotelId = $room->hotelId;
            $hotel_name = Hotel::where('id', $hotelId)->value('name');
            $room->hotel_name = $hotel_name;
            return $room;
        });
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $hotels = Hotel::all();
        return view('rooms.create', compact('hotels'));
    }

    public function store(Request $request)
    {
        Room::create($request->all());
        return redirect()->route('rooms.index');
    }

    public function edit($id)
    {
        $hotels = Hotel::all();
        $room = Room::find($id);
        return view('rooms.edit', compact('room', 'hotels'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        $room->hotelId = $request->get('hotelId');
        $room->roomNumber = $request->get('roomNumber');
        $room->capacity = $request->get('capacity');
        $room->price = $request->get('price');
        $room->save();

        return redirect()->route('rooms.index');
    }

    public function destroy(Request $request)
    {
        $room = Room::find($request->get('id'));
        $room->delete();

        return redirect()->route('rooms.index');
    }
}
