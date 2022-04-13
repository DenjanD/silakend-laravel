<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Officer\VehicleUsageRequest;
use App\Models\VehicleUsage;
use Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Carbon\Carbon;

class VehicleUsagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = VehicleUsage::where('status', 'ONGOING')->where('arrival', null)->get();

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
    public function store(VehicleUsageStoreRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = VehicleUsage::where('usage_id',$id)->where('status', 'ONGOING')->where('arrival', null)->first();

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
    public function update(VehicleUsageRequest $request, $id)
    {    
        $updateData = VehicleUsage::findOrFail($id);

        $updateData->status = 'FINISHED';
        $updateData->arrival = Carbon::now();
        $updateData->distance_count_in = $request->input('distance_count_in');
        $updateData->officer_id = JWTAuth::user()->user_id;
        if ($updateData->update()) {
            return response()->json(['status' => 'Update success'], 200); 
        }

        return response()->json(['status' => 'Update error'], 500); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
