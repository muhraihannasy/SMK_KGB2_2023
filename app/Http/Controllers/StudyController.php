<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudyRequest;
use App\Http\Requests\UpdateStudyRequest;
use App\Models\Study;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Study $study)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Study $study)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudyRequest $request, Study $study)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Study $study)
    {
        //
    }
}
