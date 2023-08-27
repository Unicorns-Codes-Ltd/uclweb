<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\EnrollmentItem;
use App\Models\User;
use App\Mail\BatchMail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBatchRequest;
use App\Http\Requests\UpdateBatchRequest;
use Illuminate\Support\Facades\Mail;



class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $batches = Batch::all();
        return view('dashboard.batches.index', compact('batches'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::where('status','3')->get();
        return view('dashboard.batches.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBatchRequest $request)
    {
        // return $request;
        $batch = Batch::create([
            'number' => $request->number,
            'course_id' => $request->course_id,
            'max_seat' => $request->max_seat,
            'start_date' => $request->start_date,
            'group_link' => $request->group_link,
            'status' => '1',
        ]);

        return redirect()->route('batches.index')->with(['status'=> 200, 'message' => 'Batch Created Successfully!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        $courses = Course::where('status','3')->get();
        return view('dashboard.batches.edit',compact('batch','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBatchRequest $request, Batch $batch)
    {
        // return $request;
        $batch->number = $request->number;
        $batch->course_id = $request->course_id;
        $batch->max_seat = $request->max_seat;
        $batch->start_date = $request->start_date;
        $batch->group_link = $request->group_link;


        if ($batch->status != '3') {
            # code...
            $batch->status = $request->status;
        }
	    $batch->update();


        $course = Course::find($batch->course_id);
        $enitems = EnrollmentItem::where('batch_id',$batch->id)->get();

        if ($batch->status == 2) {
            // Trying to send mail on course starting
            try {
                foreach ($enitems as $enitem) {
                    $user = User::find($enitem->user_id);
                    $msg = "Congratulations! The moment you've been eagerly anticipating has arrived. We are thrilled to announce the commencement of your ".$course->name." course at Software Builders Ltd. Get ready to embark on a journey of exploration, growth, and achievement. It is going to start on ".date('d-M-Y', strtotime($batch->start_date)).". All information will be available on the group.";
                    $link= route('courses.show',$course->id);
                    $maildata = ['name' => $user->name, 'text' => $msg , 'link' => $link];
                    $sendmail = Mail::to($user->email)->send(new BatchMail($maildata));
                }

            } catch (\Throwable $th) {
                //throw $th;
            }
        }elseif ($batch->status == 3) {
            try {
                // Trying to send mail on course closing
                foreach ($enitems as $enitem) {
                    $user = User::find($enitem->user_id);
                    $msg = "As the final chapter of your ".$course->name." course comes to a close, we want to take a moment to celebrate your remarkable journey of learning, growth, and achievement. Congratulations on reaching this significant milestone! Your dedication, hard work, and commitment to excellence have truly paid off.";
                    $link= route('courses.show',$course->id);
                    $maildata = ['name' => $user->name, 'text' => $msg , 'link' => $link];
                    $sendmail = Mail::to($user->email)->send(new BatchMail($maildata));
                }

            } catch (\Throwable $th) {
                //throw $th;
            }
        }

        if ($batch){
            return redirect()->route('batches.index')->with(['status'=> 200, 'message' => 'Updated Successfully!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        try {
            $batch->delete();
            return redirect()->route('batches.index')->with(['status'=> 200, 'message' => 'Deleted Successfully!']);
        } catch (\Throwable $e) {
            // return response()->json(['status' => 'error', 'message' => 'This Category have courses.']);
            return redirect()->route('batches.index')->with(['status'=> 200, 'message' => 'This batch have student!']);
        }
    }
}
