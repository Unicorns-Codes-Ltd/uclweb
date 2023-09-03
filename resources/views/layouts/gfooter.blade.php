<!-- ==================Footer=========== -->
<footer>
    <div class="pt-20 footer_area bg-cover bg-no-repeat bg-center" style="background-image: url({{asset('images/footerbg.jpeg')}})">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col sm:flex-row justify-between sm:gap-20  px-3 sm:px-0">
                <div class="sm:basis-1/2">
                    <p class="text-center sm:text-left text-base font-light text-white">Tech & Creativity Hub: Industrial Attachment, Software Dev, Web & Graphic Design, Digital Marketing, IT & Computer Training. Courses: Game Dev, Web Dev, Graphic & UI/UX, Digital Marketing. Join Unicorns Codes!</p>
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
