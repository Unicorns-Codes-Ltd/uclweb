<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreNewsletterRequest;
use App\Mail\NewsletterMail;
use App\Jobs\SendNewsletter;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Newsletter::query())->addIndexColumn()->make(true);
        }
        $newsletters = Newsletter::all();
        return view('dashboard.subscribers.news', compact('newsletters'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsletterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsletterRequest $request)
    {
        $newsletter = Newsletter::create([
            'text' => $request->body,
        ]);
        return redirect()->route('newsletters.index')->with(['status'=> 200, 'message' => 'Newsletter Created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        return view('dashboard.subscribers.show',compact('newsletter'));
    }



    public function send($id)
    {
        $newsletter = Newsletter::find($id);


        dispatch(new SendNewsletter((object)$newsletter));

        $newsletter->status = 2;
        $newsletter->update();

        return response()->json(['status' => 'success', 'message' => 'Newsletter Sending in background !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsletter = Newsletter::find($id);
        $newsletter->delete();
        return response()->json(['status' => 'success', 'message' => 'Newsletter deleted successfylly !']);
    }
}
