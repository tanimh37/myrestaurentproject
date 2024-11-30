<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reserves = Reservation::all();
        return view('backend.reservation.index', compact('reserves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reserves = Reservation::all();
        return view('backend.reservation.create', compact('reserves'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ['fname'=>'required | max:100',
            'lname'=>'required | max:100',
            'email'=>'required | max:50',
            'phone'=>'required | max:20',
            'date'=>'required ',
            'table'=>'required ',
            'guest'=>'required '
        ]
        );



        $res =new Reservation;

        $res->first_name = $request->fname;
        $res->last_name = $request->lname;
        $res->email = $request->email;
        $res->tel_number = $request->phone;
        $res->res_date = $request->date;
        $res->table_id = $request->table;
        $res->guest_number = $request->guest;

        $res->save();
        return redirect()->route('reservation.index')->with('msg', "Successfully Create");
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
