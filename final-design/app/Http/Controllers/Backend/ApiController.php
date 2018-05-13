<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Entity\Apartment;
use App\Http\Entity\Room;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
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
     * Show all the apartments of one school
     *
     * @return array ['id' => ?, 'name' => ?]
     */
    public function getApartments()
    {
        $apartments = Apartment::getAll();

        return $apartments;
    }

    /**
     * To show a list of apartment by id
     *
     * @param Request $request
     *
     * @return object
     */
    public function getApartmentById($id)
    {
        return Apartment::find($id);
    }

    public function getRooms($id)
    {
        return $this->getApartmentById($id)->rooms;
    }
}
