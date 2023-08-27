<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Enrollment;
use App\Models\EnrollmentItem;
use App\Models\Course;
use App\Models\Batch;
use App\Models\User;
use App\Mail\EnrollmentMail;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // $enrollment = Enrollment::first();
        // return $enrollment;

        if ($request->ajax()) {
            return Datatables::of( Enrollment::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.enrollments.index');
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
    public function store(StoreEnrollmentRequest $request)
    {
        $enrollment = new Enrollment;
        $enrollment->trxid =$request->trxid;
        $enrollment->total =$request->total;
        $enrollment->bkash_number =$request->bkash_number;
        $enrollment->user_id = Auth::user()->id;
        $enrollment->save();

        for ($i=0; $i < count($request->cartid); $i++) {

            $enrollmentItem = new EnrollmentItem;
            $enrollmentItem->user_id = Auth::user()->id;
            $enrollmentItem->course_id = $request->courseid[$i];
            $upcommingbatch = Batch::where('course_id',$request->courseid[$i])->where('status','1')->first();

            if ($upcommingbatch ) {
                $enrollmentItem->batch_id = $upcommingbatch->id;
            }
            $enrollmentItem->enrollment_id = $enrollment->id;
            $enrollmentItem->save();
            $delatablecart = Cart::find($request->cartid[$i]);
            $delatablecart->delete();
        }



        return redirect()->route('profile.ecources')->with(['status'=> 200, 'message' => 'Enrolled Successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        return view('dashboard.enrollments.edit',compact('enrollment'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, Enrollment $enrollment)
    {



        // return $enrollment;
        $enrollment->status = $request->status;
        $enrollment->update();

        $enrollmentItems = EnrollmentItem::where('enrollment_id', $enrollment->id)->get();

        foreach ($enrollmentItems as $enrollmentItem) {
            $enrollmentItem->status = $request->status;
            $enrollmentItem->update();
        }



        if ($request->status == 2) {
            try {
                // Trying to send Enrollment confirmation
                $courses=[];
                $user = User::find($enrollment->user_id);
                foreach ($enrollmentItems as $enrollmentItem) {
                    $course = Course::find($enrollmentItem->course_id);
                    $ic =['name' => $course->name, 'price' => $course->current_price];
                    array_push( $courses, $ic);
                }
                $msg = 'Welcome to Software Builders Ltd! We are thrilled to have you join our vibrant community of learners and embark on a journey of knowledge, growth, and discovery. Your decision to enroll in our courses marks the beginning of a transformative experience, and we are here to support and guide you every step of the way.';
                $link= route('profile.ecources');
                $maildata = ['name' => $user->name, 'text' => $msg , 'link' => $link, 'courses' =>  $courses];
                // dd($maildata);
                $sendmail = Mail::to($user->email)->send(new EnrollmentMail($maildata));

            } catch (\Throwable $th) {
                //throw $th;
            }
        }




        return  redirect("/enrollments/$enrollment->id/edit")->with(['status'=> 200, 'message' => 'Update Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
