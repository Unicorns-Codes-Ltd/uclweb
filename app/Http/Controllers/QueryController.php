<?php

namespace App\Http\Controllers;

use App\Models\Query;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreQueryRequest;
use App\Http\Requests\UpdateQueryRequest;
use App\Notifications\QueryNotification;
use Illuminate\Support\Facades\Mail;
use App\Mail\QueryMail;
use App\Models\Setting;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allquaries(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Query::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.quaries.index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function readed(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Query::where('status', 'readed')->get())->addIndexColumn()->make(true);
        }

        return view('dashboard.quaries.readed');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unreaded(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Query::where('status', 'unreaded')->get())->addIndexColumn()->make(true);
        }

        return view('dashboard.quaries.unreaded');
    }


    public function replay(Request $request)
    {

        // return $request;
        $sender = Query::find($request->sender);
        $msg = $request->message;
        // try{
        //     $sendmail =    Mail::to($sender->email)->send(new QueryMail($msg));
        // }catch (\Exception $exception){}

        // return response()->json(['status' => 'success', 'message' => 'Replied successfylly !']);
        return redirect()->route('quaries.all');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQueryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQueryRequest $request)
    {


        $query = Query::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);


        $admin = User::role('admin')->first() ;
        // Making notification to admin
        if ($admin) {
            $querydata = ['model_id' => $query->id, 'route' => 'quaries.read', 'message'=> 'A query from '.$query->name.'.'];
            $admin->notify(new QueryNotification($querydata));
        }

        if ($query) {
            // try{
            //     $sendmail =    Mail::to($subscribe->email)->send(new QueryMail($msg));
            // }catch (\Exception $exception){}

            return response()->json(['status' => 'success', 'message' => 'Thanks for contucting us. We wil get to you soon.']);
        }else{
            return response()->json(['status' => 'error', 'message' => 'Something wrong !']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function read (Query $query)
    {
        if ($query->status == 1) {
            $query->status = 2 ;
            $query->update();
        }

        try {
            $sender = User::where('email',$query->email)->first() ;
            // Making notification to sender
            if ($sender) {
                $querydata = ['model_id' => $query->id, 'route' => 'home', 'message'=> 'Your query is been readen by the admin.'];
                $sender->notify(new QueryNotification($querydata));
            }
        } catch (\Throwable $th) {
            //throw $th;
        }


        return view('dashboard.quaries.read',compact('query'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function edit(Query $query)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQueryRequest  $request
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function toggle(UpdateQueryRequest $request, $id)
    {
        $query = Query::find($id);
        $query->status = $request->updateStatus;
        $query->update();
        return response()->json(['status'=>'success','message'=>'Message mark as '.(($request->updateStatus == 'unreaded' ?'readed':'unreaded')).' !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Query::find($id);
        $category->delete();
        return response()->json(['status' => 'success', 'message' => 'Message deleted successfylly !']);
    }
}
