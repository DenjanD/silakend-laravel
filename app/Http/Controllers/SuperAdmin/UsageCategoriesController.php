<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UsageCategoryRequest;
use App\Models\UsageCategory;
use Validator;

class UsageCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UsageCategory::all();

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
    public function store(UsageCategoryRequest $request)
    {
        if (UsageCategory::create($request->validated())) {
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
        $data = UsageCategory::where('ucategory_id',$id)->first();

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
    public function update(UsageCategoryRequest $request, $id)
    {      
        $updateData = UsageCategory::findOrFail($id);

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
        $deleteData = UsageCategory::findOrFail($id);

        if ($deleteData->delete()) {
           return response()->json(['status' => 'Delete success'], 200); 
        }

        return response()->json(['status' => 'Delete error'], 200); 
    }
}
