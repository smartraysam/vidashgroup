<?php

namespace App\Http\Controllers;

use App\Models\PropertyDetail;
use Illuminate\Http\Request;

class PropertyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('companies.property.details.index');
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
    public function show(PropertyDetail $propertyDetail)
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
