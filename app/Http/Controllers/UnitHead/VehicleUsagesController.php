<?php

namespace App\Http\Controllers\UnitHead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UnitHead\VehicleUsageStoreRequest;
use App\Http\Requests\UnitHead\VehicleUsageRequestRequest;
use App\Models\VehicleUsage;
use Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class VehicleUsagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = VehicleUsage::where('user_id', JWTAuth::user()->user_id)->get();

        return response()->json(['data' => $data], 200);
    }

    public function request()
    {
        $data = VehicleUsage::whereHas('user', function ($query) {
                                return $query->where('unit_id', '=', JWTAuth::user()->unit_id);
                            })->get();

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
        if (VehicleUsage::create($request->validated())) {
            return response()->json(['status' => 'Store success'], 200);
        }
        return response()->json(['status' => 'Store failed'], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = VehicleUsage::where('usage_id',$id)->where('user_id', JWTAuth::user()->user_id)->first();

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
    public function update(Request $request, $id)
    {    
        $cancelData = VehicleUsage::findOrFail($id);

        if ($cancelData->user_id == JWTAuth::user()->user_id) {
            $cancelData->status = 'CANCELED';
            if ($cancelData->update() && $cancelData->delete()) {
                return response()->json(['status' => 'Cancel success'], 200); 
            }

            return response()->json(['status' => 'Cancel error'], 500); 
        }
        return response()->json(['status' => 'User unauthorized'], 401); 
    }

    public function verify(VehicleUsageRequestRequest $request, $id) {
        $verifyData = VehicleUsage::findOrFail($id);

        $verifyData->status = $request->input('status');
        $verifyData->status_description = $request->input('status_description');
        $verifyData->acceptor_id = JWTAuth::user()->user_id;
        if ($verifyData->update()) {
            return response()->json(['status' => 'Verify success'], 200); 
        }

        return response()->json(['status' => 'Verify error'], 500); 
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
