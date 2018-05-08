<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Entity\School;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    /**
     * Display the detail of the school.
     *
     * @return view => school=index
     */
    public function index()
    {
        $school = School::where(['id' => session()->get('user')->school_id])->first();

        return view('backend.school.index', compact('school'));
    }

    /**
     * Save the new information about school
     *
     * @param Request
     *
     * @return back | redirect
     */
    public function edit(Request $request)
    {
        $school = School::where(['id' => session()->get('user')->school_id]);
        $school->update($request->except('_method', '_token'));

        return redirect('/admin/index')->with(['msg' => 'Edit school information successfully.']);
    }
}
