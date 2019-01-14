<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Booking;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List of all bookings
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = Booking::all();

        return view('admin/list', ['data' => $data]);
    }

    /**
     * Add new booking
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        return view('admin/add');
    }

    /**
     * Edit get data
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($id)
    {
        $booking = Booking::find($id);

        return view('admin/edit', ['booking' => $booking]);
    }

    /**
     * Edit post new data
     * @param $id
     * @param Request $request
     */
    public function postEdit($id, Request $request)
    {
        $booking = Booking::find($id);

        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->date = $request->date;
        $booking->time_start = "12:11:12";
        $booking->time_end = "12:11:12";

        $booking->save();
    }

    /**
     * Detail booking
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getDetail($id)
    {
        $booking = Booking::find($id);

        return view('admin/detail', ['booking' => $booking]);
    }

    /**
     * Delete booking
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete(Request $request)
    {
        return view('admin/delete');
    }
}