<x-guest-layout>

    <section class="mt-28">
        <div class="pt-10 bg-white mt-10 sm:mt-10 pb-24 sm:pb-44 px-3 sm:px-0 min-h-screen">
            @if ($carts->count() <= 0)
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl text-udark font-bold text-center  mt-6 md:mt-10 sm:mt-0">No Course In The Cart.
                </h2>
            </div>
            @else

            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl text-udark font-bold text-center  mt-6 md:mt-10 sm:mt-0">Cart
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-5">
                    <div class="sm:col-span-3">
                        <div class="grid grid-cols-12 mt-6 md:mt-12 py-5 px-4">
                            <div class=" col-span-4 sm:col-span-3">
                                <h2 class=" text-lg text-udark font-bold text-start md:text-center sm:text-end">Course</h2>
                            </div>
                            <div class="col-span-4  sm:col-span-5 xl:col-span-6">
                                <h2 class=" text-lg text-udark font-bold sm:text-center md:text-end">Course Fee</h2>
                            </div>
                            <div class="col-span-4 sm:col-span-4 xl:col-span-3">
                                <h2 class=" text-lg text-udark font-bold text-end md:text-center">Subtotal</h2>
                            </div>
                        </div>
                    </div>
                    <div class=""></div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-5">
                    <div class="sm:col-span-3">



                        <div class="space-y-5">
                            @forelse ($carts as $cart)
                            {{-- individual cart item --}}
                            <div class="border border-uorange rounded-md py-5 px-4">
                                <div class=" grid grid-cols-12 items-center ">
                                    <div class=" col-span-4 md:col-span-4 xl:col-span-3">
                                        <div class=" flex justify-between items-center">
                                            <div class="hidden md:flex">
                                                <img class="  md:w-20 md:h-16 rounded-md" src="{{ asset($cart->course->cover)}}" alt="">
                                            </div>
                                            <div class="">
                                                <p class=" text-lg font-normal text-udark">{{$cart->course->name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-4 md:col-span-4 xl:col-span-6">
                                        <h2 class=" text-lg font-normal text-udark text-center md:text-end">{{number_format($cart->course->current_price, 0) }} BDT</h2>
                                    </div>
                                    <div class="col-span-4 md:col-span-4 xl:col-span-3">
                                        <div class=" course_add_item">
                                            <div class="">
                                                <h2 class=" text-lg font-normal text-udark text-center">{{number_format($cart->course->current_price, 0) }} BDT</h2>
                                            </div>
                                            <div class="course-remove">
                                                <form action="{{route('carts.destroy',$cart->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"class=" text-2xl text-red-600 hover:text-dorange mt-2" ><span class="iconify" data-icon="iconoir:cancel"></span class="iconify"></button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @empty

                            @endforelse

                        </div>
                    </div>
                    {{-- cart total --}}
                    <div class="">
                        <div class="px-6 py-8 border border-uorange rounded-md">
                            <h2 class="text-2xl text-udark font-bold text-center ">Cart totals</h2>
                            <h2 class="text-3xl text-udark font-bold text-center mt-4"> {{$carttotal}} BDT</h2>
                            <div class=" mt-4">
                                <form action="{{route('carts.checkout')}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    @foreach ($carts as $cart)
                                    <input type="hidden" name="course_id[]" value="{{$cart->course_id}}">
                                    <input type="hidden" name="cart_id[]" value="{{$cart->id}}">
                                    @endforeach
                                    <input type="hidden" name="total" value="{{$carttotal}}">

                                    <button type="submit" class="w-full text-sm md:text-base font-bold text-white block hover:bg-uorange bg-udark py-3 rounded-md text-center">PROCEED TO CHECKOUT</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @endif
        </div>
    </section>
</x-guest-layout>

