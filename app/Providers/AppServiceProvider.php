<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Course;
use App\Models\Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function($view){

            $notifications = null;
            if (Auth::user()) {
                # code...
                $notifications = auth()->user()->unreadNotifications;
            }
            $view->with('notifications',$notifications);
        });


        View::composer('*', function($view){

            $cartcount = 0;
            if (Auth::user()) {
                # code...
                $cartcount = Cart::where('user_id',auth()->user()->id)->count();
            }
            $view->with('cartcount',$cartcount);
        });

        View::composer('*', function($view){
            $fservices = Service::take(4)->get();
            $view->with('fservices',$fservices);
        });

        View::composer('*', function($view){
            $fcources = Course::take(5)->get();
            $view->with('fcources',$fcources);
        });
    }
}
