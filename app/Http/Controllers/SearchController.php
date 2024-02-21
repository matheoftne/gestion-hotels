<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Http\Request;

class SearchController extends Controller
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
        return view('search.index', compact('rooms'));
    }
    public function reservation($id)
    {
        $room = Room::find($id);
        $hotel_id = $room->hotelId;
        $hotel = Hotel::find($hotel_id);
        return view('search.reservation', compact('room', 'hotel'));
    }

    public function storeReservation(Request $request)
    {
        $reservation = Reservation::create($request->all());
        return redirect()->route('search.index');
    }
}
