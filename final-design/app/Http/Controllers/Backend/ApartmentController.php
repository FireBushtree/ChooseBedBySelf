<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Entity\Campus;
use App\Http\Entity\School;
use App\Http\Entity\Apartment;
use App\Http\Controllers\Controller;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the apartment.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campuses = School::where(['id' => session()->get('user')->school_id])->first()->campuses;
        $apartments = [];

        foreach ($campuses as $campus) {

            foreach ($campus->apartments as $apartment) {
                array_push($apartments, $apartment);
            }

        }

        return view('backend.apartment.index', compact('apartments'));
    }

    /**
     * Show the form for creating a new apartment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campuses = Campus::where(['school_id' => session()->get('user')->school_id])->latest()->get();
        $campusesArray = [];
        $floors = [];

        foreach($campuses as $campus) {
            $campusesArray[$campus->id] = $campus->name;
        }

        for ($i = 1; $i < 9; $i++) {
            $floors[$i] = $i;
        }

        return view('backend.apartment.create', compact('campusesArray', 'floors'));
    }

    /**
     * Store a newly created apartment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Apartment::create($request->all());

        return redirect('/admin/apartment')->with(['msg' => 'Create apartment successfully.']);
    }

    /**
     * Display the specified apartment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apartment = Apartment::findOrFail($id);

        return view('backend.apartment.show', compact('apartment'));
    }

    /**
     * Show the form for editing the specified apartment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apartment = Apartment::findOrFail($id);
        $campuses = Campus::where(['school_id' => session()->get('user')->school_id])->latest()->get();
        $campusesArray = [];
        $floors = [];

        foreach($campuses as $campus) {
            $campusesArray[$campus->id] = $campus->name;
        }

        for ($i = 1; $i < 9; $i++) {
            $floors[$i] = $i;
        }

        return view('backend.apartment.edit', compact('apartment', 'campusesArray', 'floors'));
    }

    /**
     * Update the specified apartment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $apartment = Apartment::findOrFail($id);
        $apartment->update($request->all());

        return redirect('/admin/apartment')->with(['msg' => 'Edit apartment successfully,']);
    }

    /**
     * Remove the specified apartment from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartment = Apartment::findOrFail($id);
        $apartment->delete();

        if ($apartment->trashed()) {
            return redirect('/admin/apartment')->with(['msg' => 'Delete apartment successfully.']);
        } else {
            return back()->with(['msg' => 'Delete apartment failly.']);
        }

    }
}
