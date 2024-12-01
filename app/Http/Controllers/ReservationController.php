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
        // return view('backend.reservation.show',compact('res'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        // $reserves = Reservation::all();
        return view('backend.reservation.edit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
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

        $reservation->first_name = $request->fname;
        $reservation->last_name = $request->lname;
        $reservation->email = $request->email;
        $reservation->tel_number = $request->phone;
        $reservation->res_date = $request->date;
        $reservation->table_id = $request->table;
        $reservation->guest_number = $request->guest;

        $reservation->update();
        return redirect()->route('reservation.index')->with('msg', "Successfully Create");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
