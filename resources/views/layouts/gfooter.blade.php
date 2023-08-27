<!-- ==================Footer=========== -->
<footer>
    <div class="pt-20 footer_area bg-cover bg-no-repeat bg-center" style="background-image: url({{asset('images/footerbg.jpeg')}})">
        <div class="max-w-7xl mx-auto">
            {{-- <div class=" bg-uorange px-8 py-4 sm:py-14 sm:px-14 rounded-xl sm:rounded-3xl subscrib_area ">
                <div class="sm:grid sm:grid-cols-2 sm:gap-10 sm:justify-between sm:items-end">
                    <div class="">
                        <div class="touch_line">
                            <p class=" text-lg text-white font-normal text-center sm:text-left ">Get in touch</p>
                        </div>
                        <h2
                            class="text-xl sm:text-4.5xl font-bold text-white leading-none text-center sm:text-start">
                            SUBSCRIBE <span class="  text-nblue">NEWSLETTER</span></h2>
                    </div>
                    <div class="">
                        <form action="" id="subscriptionForm">
                            <div class=" flex items-end sm:items-center sm:justify-between justify-center ">
                                <div class="w-4/5 mr-5 mt-4 sm:mt-0">
                                    <input class="mt-1 w-full border-t-0 border-x-0 border-b-[1px] border-white  shadow-sm focus:outline-none block placeholder:text-white text-lg text-white  bg-transparent"
                                    type="email" name="email" :value="old('email')" required placeholder="Email">
                                </div>
                                <button type="submit" class=" bg-white hover:bg-nblue hover:text-white text-nblue sm:text-lg text-sm font-bold px-2 py-1 sm:px-4 sm:py-2.5 rounded-md uppercase">{{ __('Subscribe') }}</button>
                            </div>
                            <p id="subscriptionsuccess" class="text-white font-raleway text-base mt-2"></p>
                        </form>
                    </div>
                </div>
            </div> --}}
            <div class="flex flex-col sm:flex-row justify-between sm:gap-20  px-3 sm:px-0">
                <div class="sm:basis-1/2">
                    <p class="text-center sm:text-left text-base font-light text-ugray">Tech & Creativity Hub: Industrial Attachment, Software Dev, Web & Graphic Design, Digital Marketing, IT & Computer Training. Courses: Game Dev, Web Dev, Graphic & UI/UX, Digital Marketing. Join Unicorns Codes!</p>
                    {{-- social icon --}}
                    <div class="flex justify-center sm:justify-start gap-8 px-4 mt-4">
                        <a href=""> <img src="{{ asset('images/tw.png') }}" alt="" srcset=""> </a>
                        <a href=""> <img src="{{ asset('images/li.png') }}" alt="" srcset=""> </a>
                        <a href=""> <img src="{{ asset('images/ig.png') }}" alt="" srcset=""> </a>
                    </div>
                </div>
                <div class="sm:basis-1/2 flex justify-center sm:justify-end  mt-8 sm:mt-0">
                    <div class=" sm:mt-5 ">
                        <ul class="grid grid-cols-3 sm:grid-cols-2 gap-10">
                            <li class=" hover:text-uorange text-center sm:text-left"><a
                                    class=" text-base font-semibold text-white hover:text-uorange" href="{{route('home')}}">Home</a>
                            </li>
                            <li class=" hover:text-uorange text-center sm:text-left"><a
                                    class=" text-base font-semibold text-white hover:text-uorange" href="{{route('gallery')}}">Gallery</a>
                            </li>
                            <li class=" hover:text-uorange text-center sm:text-left"><a
                                    class=" text-base font-semibold text-white hover:text-uorange" href="{{route('service')}}">Service</a></li>
                            <li class=" hover:text-uorange text-center sm:text-left"><a
                                    class=" text-base font-semibold text-white hover:text-uorange" href="{{route('about')}}">About Us</a></li>
                            <li class=" hover:text-uorange text-center sm:text-left"><a
                                    class=" text-base font-semibold text-white hover:text-uorange" href="{{route('cource')}}">Courses</a>
                            </li>
                            <li class=" hover:text-uorange text-center sm:text-left"><a
                                    class=" text-base font-semibold text-white hover:text-uorange" href="{{route('contact')}}">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- logo --}}
        <div class="max-w-7xl mx-auto py-4 flex justify-center items-center mt-10 px-4 sm:px-0">
            <img src="{{asset('images/footer logo.png')}}" alt="" srcset="" class="h-30">
        </div>
    </div>
</footer>
<!-- ==================Footer=========== -->
