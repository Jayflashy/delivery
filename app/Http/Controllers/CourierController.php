<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\ShipmentHistory;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    //
    function index(){
        $shipment = Shipment::all();
        return view('admin.shipment.index', compact('shipment'));
    }
    function create(){
        return view('admin.shipment.add');
    }
    function store(Request $request){
        // Validate???
        $code = shipCode();
        $input = $request->all();
        $input['code'] = $code;
        $shipment = Shipment::create($input);
        return redirect()->route('admin.shipment.history', $code)->withSuccess("Shipment Added Successfully.");

    }
    function edit($code){
        $shipment = Shipment::whereCode($code)->first();
        return view('admin.shipment.edit', compact('shipment'));
    }
    function update($code, Request $request){
        $shipment = Shipment::whereCode($code)->first();
        $shipment->update($request->all());
        return back()->withSuccess('Shipment Updated Successfully');
    }
    // shipment History
    function history($code){
        $shipment = Shipment::whereCode($code)->first();
        return view('admin.shipment.history', compact('shipment'));
    }
    function store_history($code, Request $request){
        // return $request->all();
        $shipment = Shipment::whereCode($code)->first();
        $shipment->history()->create($request->all());

        return back()->withSuccess('Track History Added Successfully');
    }
    function update_history($code, $id, Request $request){
        $shipment = Shipment::whereCode($code)->first();
        $history = ShipmentHistory::find($id)->update($request->all());

        return back()->withSuccess('Track History Updated Successfully');
    }

    // Settings
    function setting(){
        return view('admin.shipment.setting');
    }
}
