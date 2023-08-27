<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();

        $carttotal =  $carts->sum('total');

        return view('cart.cart',compact('carts','carttotal'));
    }


    /**
     * Display a listing of the resource.
     */
    public function checkout(Request $request)
    {

        $cartids=$request->cart_id;
        $courseids=$request->course_id;
        $carttotal=$request->total;

        // return $request;
        $user = Auth::user();
        return view('cart.checkout',compact('user','cartids','courseids','carttotal'));
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
    public function store(StoreCartRequest $request)
    {
        $cart = Cart::create([
                'course_id' => $request->course_id,
                'user_id' => Auth::user()->id,
                'total' => $request->total
            ]
        );

        return redirect()->route('carts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('carts.index')->with_success('Course removed from cart');
    }
}
