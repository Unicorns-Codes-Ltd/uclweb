<?php

namespace App\Http\Controllers;

use App\Models\EnrollmentItem;
use App\Http\Requests\StoreEnrollmentItemRequest;
use App\Http\Requests\UpdateEnrollmentItemRequest;

class EnrollmentItemController extends Controller
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
    public function store(StoreEnrollmentItemRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(EnrollmentItem $enrollmentItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EnrollmentItem $enrollmentItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentItemRequest $request,  $enrollmentItem)
    {
        $ue = EnrollmentItem::find($enrollmentItem);
        $ue->batch_id = $request->batch_id;
        $ue->save();

        return redirect("/enrollments/$ue->enrollment_id/edit");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EnrollmentItem $enrollmentItem)
    {
        //
    }
}
