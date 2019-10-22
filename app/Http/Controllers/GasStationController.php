<?php

namespace App\Http\Controllers;


use App\GasStation;

class GasStationController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return GasStation::findOrFail($id);
    }
}
