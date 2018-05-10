<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Entity\Notice;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    /**
     * Display a listing of the notice.
     *
     * @return view => notice-index
     */
    public function index()
    {
        $notices = Notice::where(['school_id' => session()->get('user')->school_id])
                            ->latest()->get();

        return view('backend.notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new notice.
     *
     * @return view => create view
     */
    public function create()
    {
        return view('backend.notice.create');
    }

    /**
     * Store a newly created notice in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = $request->all();
        $model['school_id'] = session()->get('user')->school_id;
        Notice::create($model);

        return redirect('/admin/notice')->with(['msg' => 'Create notice successfully.']);
    }

    /**
     * Display the specified notice.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::findOrFail($id);

        return view('backend.notice.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified notice.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::findOrFail($id);

        return view('backend.notice.edit', compact('notice'));
    }

    /**
     * Update the specified notice in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notice = Notice::findOrFail($id);
        $notice->update($request->all());

        return redirect('/admin/notice')->with(['msg' => 'Edit notice successfully.']);
    }

    /**
     * Remove the specified notice from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();

        if ($notice->trashed()) {

            return redirect('/admin/notice')->with(['msg' => 'Delete notice successfully']);
        } else {

            return back()->with(['tip' => 'Delete notice failly.']);
        }
    }
}
