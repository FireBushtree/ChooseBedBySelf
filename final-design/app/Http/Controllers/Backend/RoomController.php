<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Util\StringUtil;
use App\Http\Entity\Bed;
use App\Http\Entity\Room;
use App\Http\Entity\Campus;
use App\Http\Entity\Apartment;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{

    /**
     * Get apartments form DB.
     *
     * @return array
     */
    protected function getApartmentsArray()
    {
        $apartments = Apartment::getAll();
        $apartmentsArray = [];

        foreach ($apartments as $apartment) {
            $apartmentsArray[$apartment->id] = $apartment->name;
        }

        return $apartmentsArray;
    }

    /**
     * Get the number of beds.
     *
     * @return array
     */
    protected function getBeds()
    {
        $beds = [];

        for($i = 1; $i < 9; $i++) {
            $beds[$i] = $i;
        }

        return $beds;
    }
    /**
     * Display a listing of the room.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.room.index');
    }

    /**
     * Show the form for creating a new room.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartments = $this->getApartmentsArray();
        $beds = $this->getBeds();

        return view('backend.room.create', compact('apartments', 'beds'));
    }

    /**
     * Store a newly created room in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Room::create($request->all());

        return redirect('/admin/room')->with(['msg' => 'Create room successfully.']);
    }

    /**
     * Display the specified room.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);

        return view('backend.room.show', compact('room'));
    }

    /**
     * Show the form for editing the specified room.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified room in storage.
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
     * Remove the specified room from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Help the user to add room auto.
     *
     * @return view => auto-add
     */
    public function showAutoAdd()
    {
        $apartmentsArray = $this->getApartmentsArray();
        $rooms = [];
        $beds = $this->getBeds();

        for($i = 1; $i < 101; $i++) {
            $rooms[$i] = $i;
        }

        return view('backend.room.auto-add', compact('apartmentsArray', 'rooms', 'beds'));
    }

    /**
     * Auto create bed datas.
     *
     * @param Request $request
     *
     * @return redirect => room-index
     */
    public function autoAdd(Request $request)
    {
        //1. Get all rooms had been created and destory them.
        Room::where(['apartment_id' => $request->apartment_id])->delete();

        //2. Auto add rooms and beds.
        $apartment = Apartment::findOrFail($request->apartment_id);
        $beds = [];

        for ($i = 1; $i <= $apartment->floor_num; $i++) {

            for ($j = 1; $j <= $request->roomsNum; $j++) {
                $room['apartment_id'] = $apartment->id;
                $room['max_beds'] = $request->bedsNum;
                $room['floor_id'] = $i;
                $room['name'] = $i . '-' .StringUtil::addZero($j);
                $roomId = Room::insertGetId($room);

                for ($k = 0; $k < $request->bedsNum; $k++) {
                    $bed['num'] = $k + 1;
                    $bed['room_id'] = $roomId;
                    array_push($beds, $bed);
                }

            }

        }

        Bed::insert($beds);

        return redirect('/admin/room')->with(['msg' => 'Auto add successfully.']);
    }
}
