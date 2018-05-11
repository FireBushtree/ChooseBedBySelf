<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Entity\Campus;
use App\Http\Controllers\Controller;

class CampusController extends Controller
{
    /**
     * Display a listing of the campus.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campuses = Campus::where(['school_id' => session()->get('user')->school_id])->latest()->get();

        return view('backend.campus.index', compact('campuses'));
    }

    /**
     * Show the form for creating a new campus.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.campus.create');
    }

    /**
     * Store a newly created campus in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = $request->all();
        $model['school_id'] = session()->get('user')->school_id;
        Campus::create($model);

        return redirect('/admin/campus')->with(['msg' => 'Create campus successfully']);
    }

    /**
     * Display the specified campus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campus = Campus::findOrFail($id);

        return view('backend.campus.show', compact('campus'));
    }

    /**
     * Show the form for editing the specified campus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campus = Campus::findOrFail($id);

        return view('backend.campus.edit', compact('campus'));
    }

    /**
     * Update the specified campus in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campus = Campus::findOrFail($id);
        $campus->update($request->all());

        return redirect('/admin/campus')->with(['msg' => 'Edit campus successfully.']);
    }

    /**
     * Remove the specified campus from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campus = Campus::findOrFail($id);
        $campus->delete();

        if ($campus->trashed()) {

            return redirect('/admin/campus')->with(['msg' => 'Delete campus successfully.']);
        } else {

            return back()->with(['tip' => 'Delete campus failly.']);
        }
    }
}
