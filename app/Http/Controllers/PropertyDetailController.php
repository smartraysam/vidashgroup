<?php

namespace App\Http\Controllers;

use App\Models\PropertyDetail;
use App\Models\Property;
use Illuminate\Http\Request;


class PropertyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // dd($id);
        //$properties is an array
        //Property is a Class
        //:: is the operator to call a method from a class
        $properties = Property::where('id', $id)->get();
        // $properties = Property::find($id); // search by primary key 'ID'
        // dd($properties);
        return view('companies.property.details.index', compact('properties')); // compact(array name)


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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyDetail  $propertyDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyDetail  $propertyDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyDetail $propertyDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyDetail  $propertyDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyDetail $propertyDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyDetail  $propertyDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyDetail $propertyDetail)
    {
        //
    }
}
