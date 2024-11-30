<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Specialoffer;
use Illuminate\Http\Request;

class SpecialofferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Specialoffer::orderBy('id', 'desc')->get();
        return view('backend.specialoffer.index',compact('items'));

        // return "hello tanim";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SpecialOffer $specialOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SpecialOffer $specialOffer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SpecialOffer $specialOffer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SpecialOffer $specialOffer)
    {
        $specialOffer->delete();
        return redirect()->route('specialoffer.index')->with('msg', 'Delete Successfully' );
    }
}
