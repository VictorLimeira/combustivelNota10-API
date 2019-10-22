<?php

namespace App\Http\Controllers;


use App\GasStation;
use Illuminate\Http\Request;

class GasStationController extends Controller
{

    public function index()
    {
        $gasStations = GasStation::all();
        return response()->json($gasStations);
    }

    public function create(Request $request)
    {
        $gasStation = GasStation::create($request->all());

        return response()->json($gasStation);
    }

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

    public function update(Request $request, $id)
    {
        $gasStation= GasStation::findOrFail($id);

        $gasStation->gas_ctation_cod = $request->input('gas_ctation_cod');
        $gasStation->gas_station_name = $request->input('gas_station_name');
        $gasStation->longitude = $request->input('longitude');
        $gasStation->latitude = $request->input('latitude');
        $gasStation->city = $request->input('city');
        $gasStation->state = $request->input('state');
        $gasStation->show_in_app = $request->input('show_in_app');
        $gasStation->last_visit_date = $request->input('last_visit_date');
        $gasStation->store = $request->input('store');
        $gasStation->oil_change = $request->input('oil_change');
        $gasStation->washing = $request->input('washing');
        $gasStation->rubber_repair = $request->input('rubber_repair');
        $gasStation->common_ethanol = $request->input('common_ethanol');
        $gasStation->additive_ethanol = $request->input('additive_ethanol');
        $gasStation->common_gasoline = $request->input('common_gasoline');
        $gasStation->additive_gasoline = $request->input('additive_gasoline');
        $gasStation->premium_gasoline = $request->input('premium_gasoline');
        $gasStation->s10_diesel_common = $request->input('s10_diesel_common');
        $gasStation->s1_diesel_additive = $request->input('s1_diesel_additive');
        $gasStation->s500_diesel_common = $request->input('s500_diesel_common');
        $gasStation->s500_diesel_additive = $request->input('s500_diesel_additive');

        $gasStation->save();
        return response()->json($gasStation);
    }

    public function destroy($id)
    {
        $gasStation = GasStation::findOrFail($id);
        $gasStation->delete();
        return response()->json('Gas station removed successfully');
    }
}
