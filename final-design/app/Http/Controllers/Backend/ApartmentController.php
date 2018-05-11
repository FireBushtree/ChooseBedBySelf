<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Entity\Campus;
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
        $campuses = session()->get('user')->school->campus;

        return view('backend.apartment.index', compact('campuses'));
    }

    /**
     * Show the form for creating a new apartment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campuses = session()->get('user')->school->campus;
        $campusesArray = [];

        foreach($campuses as $campus) {
            $campusesArray[$campus->id] = $campus->name;
        }

        return view('backend.apartment.create', compact('campusesArray'));
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
        //
    }

    /**
     * Show the form for editing the specified apartment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified apartment from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
