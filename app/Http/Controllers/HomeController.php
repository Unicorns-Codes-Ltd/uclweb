<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Course;
use App\Models\Album;
use App\Models\User;
use App\Models\Category;
use App\Notifications\QueryNotification;
use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;





class HomeController extends Controller
{
    function index() : View
    {
        $categories = Category::all();
        $services = Service::where('home_page','1')->take(4)->get();
        $courses = Course::latest()->take(10)->get();


        return view('index',[
            'categories' => $categories,
            'services' => $services,
            'courses' => $courses
        ]);
    }



    // return to dashboard
    function dashboard()
    {

        $coursqty = Course::count();
        $userqty = User::count();
        $servicesqty = Service::count();
        return view('dashboard',compact('coursqty','userqty','servicesqty'));
    }

    function about() { return view('about'); }

    // Services page
    function service() {
        $services = Service::all();
        return view('service',compact('services'));
    }

    // course controller
    function cource(Request $request) {

        $categories = Category::all();
        if ($request->category_id) {
            $checked_categories = $request->category_id;
            $courses = Course::wherein('category_id',$request->category_id)->where('status','3')->get();
            return view('cource',compact('courses','categories','checked_categories'));
        }else {
            $checked_categories = [];

            $courses = Course::where('status','3')->get();
            return view('cource',compact('courses','categories','checked_categories'));

        }

    }

    function gallery() {
        $albums = Album::all();
        return view('gallery',compact('albums'));
    }
    function contact() { return view('contact'); }
    function terms() { return view('terms'); }



    function cshow() { return view('dashboard.courses.show'); }




    // Subscribing user
    public function subscribe(Request $request)
    {
        $exist = Subscriber::where('email', $request->email)->get();
        if ($exist->count() > 0) {
            return response()->json(['status' => 'error', 'message' => 'Email already subscribed !']);
        }

        $subscribe = Subscriber::create(['email' => $request->email]);

        if ($subscribe) {
            // $msg = Setting::where('property', 'newslettertxt')->first()->value;
            $msg = 'Welcome! Subscribed successfully !';
            // try {
            //     Mail::to($subscribe->email)->send(new SubscriptionMail($msg));
            // } catch (\Exception $exception) {
            // }
            return response()->json(['status' => 'success', 'message' => $msg]);
        }
    }

    // Notification mark as read
    function markNotification(Request $request)
    {
        auth()->user()
        ->unreadNotifications
        ->when($request->input('id'),function($query) use ($request){
            return $query->where('id',$request->input('id'));
        })
        ->markAsRead();

        return response()->noContent();
    }

}
