<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Model\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('index');
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
        ]);

        $booking = new Booking;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->date = $request->date;
        $booking->time_start = "10:11:12";
        $booking->time_end = "10:11:12";

        $booking->save();
//        dump($booking);exit;
    }
}