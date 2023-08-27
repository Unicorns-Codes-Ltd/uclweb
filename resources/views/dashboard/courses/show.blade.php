<x-guest-layout>

    <section class="mt-28">
        <div class=" py-10 sm:py-24  bg-no-repeat bg-cover bg-center min-h-[300px] bg-udark/80 bg-blend-multiply" style="background-image: url({{asset('img/course_hero.jpg') }});">
            <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-12 sm:gap-4 px-4 sm:px-0">
                <div class="sm:col-span-8">

                    <h2 class="text-3xl lg:text-7xl text-white font-bold text-center sm:text-left">{{$course->name}}</h2>
                    <p class="max-w-3xl text-base font-normal text-center sm:text-left mt-10 text-white">{{$course->short_description}}</p>
                    @role('admin')
                    <div class="  rounded-md p-5 mb-4 fixed bottom-4 right-4 z-50">
                        <a class=" text-base font-bold text-white block bg-uorange p-3 rounded-md text-center" href="{{route('courses.edit',$course->id)}}"><span class="iconify" data-icon="fluent:edit-20-regular"></span></a>
                    </div>
                    @endrole
                    <div class="">
                        @auth

                            @if($ec && in_array($course->id, $ec))

                            <div class="bg-white/10 p-4  rounded-md  backdrop-blur-sm text-white mt-4">
                                <h2 class=" text-xl font-bold">Group Link</h2>
                                <p class="">{!! $batchgrouptext !!}</p>

                            </div>
                            @else

                            <div class="">
                                <div class=" mt-4">
                                    @if ($mycartcourse > 0)
                                        <a href="{{route('carts.index')}}">
                                            <button type="submit" class="flex gap-4 text-base font-bold text-white bg-uorange py-3 px-4 rounded-md text-center hover:scale-105 transition duration-150 ease-in-out">
                                                <span>Go to Cart</span>
                                                <span class="iconify text-2xl" data-icon="fluent:cart-16-filled"></span>
                                            </button>
                                        </a>
                                    @else

                                    <form action="{{route('carts.store')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                        <input type="hidden" name="total" value="{{$course->current_price}}">
                                        <button type="submit" class="flex gap-4 text-base font-bold text-white bg-uorange py-3 px-4 rounded-md text-center hover:scale-105 transition duration-150 ease-in-out">
                                            <span>{{$course->current_price}} BDT</span>
                                            <span class="iconify text-2xl" data-icon="fluent:cart-16-filled"></span>
                                        </button>
                                    </form>
                                    @endif


                                </div>
                            </div>
                            @endif
                            @endauth

                            @guest
                            <div class="text-uorange">
                                <h2 class=" text-xl text-uorange font-bold">{{number_format($course->current_price, 0) }} BDT</h2>
                                <div class=" mt-4">

                                    <form action="{{route('carts.store')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                        <input type="hidden" name="total" value="{{$course->current_price}}">
                                        <button type="submit" class="text-base font-bold text-white block bg-udark hover:bg-uorange py-3 rounded-md text-center">ENROLL</button>
                                    </form>


                                </div>
                            </div>
                            @endguest
                    </div>
                </div>

                {{-- instructor --}}
                <div class="mt-4 sm:mt-0 sm:col-span-4 sm:flex sm:items-end sm:justify-end">

                    <div class="bg-white/10 p-4  rounded-md sm:inline-block backdrop-blur-sm">
                        <h2 class=" text-xl font-bold text-white">Course Instructor</h2>
                        <div class=" mt-4 ">
                            <div class=" flex items-center justify-center sm:justify-start">
                                <div class=" mr-4">
                                    {{-- <img class=" w-16 h-16 rounded-full" src="{{asset($course->instructor->pp)}}" alt=""> --}}
                                    @if ($course->instructor->pp == null)
                                        <img class=" w-16 h-16 rounded-full" src="{{asset('img/team03.png')}}" alt="{{$course->instructor->name}}">
                                    @else
                                        <img class=" w-16 h-16 rounded-full" src="{{ asset($course->instructor->pp) }}" alt="{{$course->instructor->name}}">
                                    @endif
                                </div>
                                <div class="">
                                    <p class=" text-base font-bold text-uorange">{{$course->instructor->name}}</p>
                                    @if ($course->instructor->designation)
                                    <small class=" text-sm font-light text-white">{{$course->instructor->designation}}</small>
                                    @else

                                    <small class=" text-sm font-light text-white">Unknown</small>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="course-details-page">
        <div class="pt-5 sm:pt-10 pb-5 sm:pb-10 bg-white  px-3 sm:px-0">
            <div class="max-w-7xl mx-auto">
                <div class="sm:grid sm:grid-cols-12 gap-5">
                    <div class=" col-span-8 ">
                        <div class="course_cover rounded-md"
                            style="background-image: url('{{ asset($course->cover) }}');">
                        </div>
                        <div class=" mt-10 mb-4">
                            <h2 class=" text-xl font-bold text-udark">Description</h2>
                        </div>
                        <div class="" id="course-description">
                            <div class="" id="course-description">
                                {!! $course->description !!}
                            </div>
                        </div>
                        <div class=" mt-10 mb-4">
                            <h2 class=" text-xl font-bold text-udark">Curriculam</h2>
                        </div>
                        <div class="">
                            <div class="" id="course-curriculam">
                                {!! $course->curriculam !!}
                            </div>
                        </div>
                    </div>
                    <div class=" col-span-4 m-4 sm:mt-0">





                        <div class=" mt-4">
                            <h2 class=" text-2xl font-semibold text-uorange">Material Includes</h2>
                            <div class="mt-6" id="course-materials">
                                {!! $course->materials !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-slot name="script">
        <script>
            $(document).ready(function () {
                $('#course-details-page h2').addClass('text-lg text-uorange font-bold');
                $('#course-details-page ul').addClass('pl-4 list-disc');
                $('#course-details-page ul li').addClass('text-base text-udark list-disc mb-2');
            });
        </script>
    </x-slot>
</x-guest-layout>
