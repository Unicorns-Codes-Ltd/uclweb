<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use App\Models\Service;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreQuotationRequest;
use App\Http\Requests\UpdateQuotationRequest;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Quotation::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.quotations.index');
    }


        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation  $quotation)
    {
        $quotation->update(['status'=> '2']);
        return view('dashboard.quotations.show',compact('quotation'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('dashboard.quotations.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuotationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuotationRequest $request)
    {
        $quotation = new Quotation;
        $quotation->name = $request->name;
        $quotation->email = $request->email;
        $quotation->service = $request->servicename;
        $quotation->message = $request->message;
        $quotation->service_id = $request->servseid;
        $quotation->phone = $request->phone;

        // course cover
        if ($request->file('attachment')) {
            $thumbnail = $request->file('attachment');
            $image_full_name = time().'_'.str_replace([" ", "."], ["_","a"],$quotation->name).'.'.$thumbnail->getClientOriginalExtension();
            $upload_path = 'images/frontimages/quotation/';
            $image_url = $upload_path.$image_full_name;
            $success = $thumbnail->move($upload_path, $image_full_name);
            $quotation->attachment = $image_url;
        }

	    $quotation->save();

        $service = Service::find($request->servseid);
        $latestservices = Service::latest()->take(2)->get();
        return view('dashboard.services.show',compact('service','latestservices'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotation  $query
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Quotation::find($id);
        $category->delete();
        return response()->json(['status' => 'success', 'message' => 'Message deleted successfylly !']);
    }


    public function fileDownload(Request $request)
    {
        return response()->download($request->file_url);
    }
}
