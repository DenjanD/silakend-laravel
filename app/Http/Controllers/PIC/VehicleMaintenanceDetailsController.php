<?php

namespace App\Http\Controllers\PIC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PIC\VehicleMaintenanceDetailRequest;
use App\Models\VehicleMaintenanceDetail;
use Validator;

class VehicleMaintenanceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = VehicleMaintenanceDetail::all();

        return response()->json(['data' => $data], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleMaintenanceDetailRequest $request)
    {
        if (VehicleMaintenanceDetail::create($request->validated())) {
            return response()->json(['status' => 'Store success'], 200);
        }

        return response()->json(['status' => 'Store failed'], 422);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = VehicleMaintenanceDetail::where('detail_id',$id)->first();

        return response()->json(['data' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleMaintenanceDetailRequest $request, $id)
    {
        $updateData = VehicleMaintenanceDetail::findOrFail($id);

        if ($updateData->update($request->validated())) {
            return response()->json(['status' => 'Update success'], 200);
        }

        return response()->json(['status' => 'Update failed'], 422);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = VehicleMaintenanceDetail::findOrFail($id);

        if ($deleteData->delete()) {
           return response()->json(['status' => 'Delete success'], 200); 
        }

        return response()->json(['status' => 'Delete error'], 200); 
    }
}
