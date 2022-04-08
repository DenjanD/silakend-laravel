<?php

namespace App\Http\Controllers\UnitMember;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UnitMember\VehicleUsageRequest;
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
    public function store(VehicleUsageRequest $request)
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
    public function update(VehicleUsageRequest $request, $id)
    {    
        $cancelData = VehicleUsage::findOrFail($id);

        if ($cancelData->user_id == JWTAuth::user()->user_id) {
            $cancelData->status = 'CANCEL';
            if ($cancelData->update() && $cancelData->delete()) {
                return response()->json(['status' => 'Cancel success'], 200); 
            }

            return response()->json(['status' => 'Cancel error'], 500); 
        }
        return response()->json(['status' => 'User unauthorized'], 401); 
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