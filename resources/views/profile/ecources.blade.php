<x-guest-layout>
    <!-- ==============Course Details start===================== -->
    <section class="bg-white pt-14 mt-20">
        <div class="pt-20 sm:pt-12 px-3 lg:px-0">


            @include('profile.partials.profile-heading')

    </section>
    <!-- ==============Course Details end===================== -->
    <!-- ===============instructor-dashboard-item start================ -->
    <section class="bg-white pt-6 lg:pt-12">
        <div class=" pb-24 lg:pb-44 px-3 lg:px-0">
            <div class="max-w-7xl mx-auto">
                <div class="lg:grid lg:grid-cols-12 gap-10">

                    @include('profile.partials.profile-navigation')

                    {{-- Page content --}}
                    <div class=" col-span-8 mt-3 lg:mt-0">
                        <div class="p-5 border rounded-md shadow">
                            <div class=" border-b border-b-slate-400 pb-3">
                                <h2 class=" text-xl text-nblue font-bold">Enrolled Courses</h2>
                            </div>
                            <div class="mt-5">
                                <div class="mb-4 border-b pb-1 lg:pb-0 lg:border-none border-b-nblue">
                                    <div class="tabs">
                                        <div class="tab_line">
                                            <div class=" ">
                                                <ul class="tabs-nav flex">
                                                    <li class="mr-10"><a class=" text-lg font-medium mt-4  leading-8"
                                                            href="#enrolled_Courses">Enrolled Courses</a>
                                                    </li>
                                                    <li class="mr-10"><a class=" text-lg font-medium mt-4  leading-8"
                                                            href="#active_Courses">Active Courses</a>
                                                    </li>
                                                    <li class="mr-10"><a class=" text-lg font-medium mt-4  leading-8"
                                                            href="#completed_Courses">Pending Courses</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- END seting_tabs-nav -->
                                        <div class="tabs-content">


                                            {{-- enrolled courses --}}
                                            <div id="enrolled_Courses" class="tab-content">
                                                <div class="mt-6 lg:mt-10">
                                                    <div class="grid md:grid-cols-2 gap-10">


                                                        @forelse ($enrolledcourses as $item)

                                                        <a href="{{route('courses.show', $item->course->id)}}">
                                                            <div class=" border border-lgreen rounded-md">
                                                                <div class="courser_img" style="background-image: url({{asset($item->course->cover)}});">
                                                                </div>
                                                                <div class="px-5 py-3 relative">
                                                                    <div class=" mt-2">
                                                                        <h2 class=" text-lg text-nblue font-bold">{{$item->course->name}}</h2>
                                                                    </div>
                                                                    <div class="mt-2 flex justify-between items-end">
                                                                        <div class=" flex items-center">
                                                                            <div class="mr-3">
                                                                                {{-- <img class=" w-14 h-14 rounded-full" src="{{asset($item->course->instructor->pp)}}" alt=""> --}}
                                                                                {{-- if user dont have picture --}}
                                                                                @if ($item->course->instructor->pp == null)
                                                                                    <img class=" w-14 h-14 rounded-full" src="{{asset('img/team03.png')}}" alt="{{$item->course->instructor->name}}">
                                                                                @else
                                                                                    <img class=" w-14 h-14 rounded-full" src="{{ asset($item->course->instructor->pp) }}" alt="{{$item->course->instructor->name}}">
                                                                                @endif
                                                                            </div>
                                                                            <div class="">
                                                                                <h2 class=" text-base text-nblue font-semibold">{{$item->course->instructor->name}}
                                                                                </h2>
                                                                                @if ($item->course->instructor->designation)
                                                                                <p class=" text-sm font-medium ">{{$item->course->instructor->designation}}</p>
                                                                                @else

                                                                                <p class=" text-sm font-medium ">Instructor</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <p class=" text-lg font-bold text-white bg-dgreen px-3 py-1 rounded-full"> {{number_format($item->course->current_price, 0) }} BDT</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="absolute top-4 right-0">
                                                                        @if ($item->course->status == '1')
                                                                        <p class="text-xs text-white bg-dorange px-2 py-1"> Pending</p>
                                                                        @elseif ($item->course->status == '2')
                                                                        <p class="text-xs text-white bg-dorange px-2 py-1"> On Review</p>
                                                                        @else

                                                                        <p class="text-xs text-white bg-dorange px-2 py-1"> Running</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </a>

                                                        @empty
                                                        <p>No Course Enrolled</p>
                                                        @endforelse


                                                    </div>
                                                </div>
                                            </div>

                                            {{-- active courses --}}
                                            <div id="active_Courses" class="tab-content">
                                                <div class="mt-6 lg:mt-10">
                                                    <div class="grid md:grid-cols-2 gap-10">

                                                        @forelse ($aenrolledcourses as $item)

                                                        <a href="{{route('courses.show', $item->course->id)}}">
                                                            <div class=" border border-lgreen rounded-md">
                                                                <div class="courser_img" style="background-image: url({{asset($item->course->cover)}});">
                                                                </div>
                                                                <div class="px-5 py-3 relative">
                                                                    <div class=" mt-2">
                                                                        <h2 class=" text-lg text-nblue font-bold">{{$item->course->name}}</h2>
                                                                    </div>
                                                                    <div class="mt-2 flex justify-between items-end">
                                                                        <div class=" flex items-center">
                                                                            <div class="mr-3">
                                                                                {{-- <img class=" w-14 h-14 rounded-full" src="{{asset($item->course->instructor->pp)}}" alt=""> --}}
                                                                                {{-- if user dont have picture --}}
                                                                                @if ($item->course->instructor->pp == null)
                                                                                    <img class=" w-14 h-14 rounded-full" src="{{asset('img/team03.png')}}" alt="{{$item->course->instructor->name}}">
                                                                                @else
                                                                                    <img class=" w-14 h-14 rounded-full" src="{{ asset($item->course->instructor->pp) }}" alt="{{$item->course->instructor->name}}">
                                                                                @endif
                                                                            </div>
                                                                            <div class="">
                                                                                <h2 class=" text-base text-nblue font-semibold">{{$item->course->instructor->name}}
                                                                                </h2>
                                                                                @if ($item->course->instructor->designation)
                                                                                <p class=" text-sm font-medium ">{{$item->course->instructor->designation}}</p>
                                                                                @else

                                                                                <p class=" text-sm font-medium ">Instructor</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <p class=" text-lg font-bold text-white bg-dgreen px-3 py-1 rounded-full"> {{number_format($item->course->current_price, 0) }} BDT</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="absolute top-4 right-0">
                                                                        @if ($item->course->status == '1')
                                                                        <p class="text-xs text-white bg-dorange px-2 py-1"> Pending</p>
                                                                        @elseif ($item->course->status == '2')
                                                                        <p class="text-xs text-white bg-dorange px-2 py-1"> On Review</p>
                                                                        @else

                                                                        <p class="text-xs text-white bg-dorange px-2 py-1"> Running</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </a>

                                                        @empty
                                                        <p>No Active Enrollment</p>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- completed course --}}
                                            <div id="completed_Courses" class="tab-content">
                                                <div class="mt-6 lg:mt-10">
                                                    <div class="grid md:grid-cols-2 gap-10">

                                                        @forelse ($penrolledcourses as $item)

                                                        <a href="{{route('courses.show', $item->course->id)}}">
                                                            <div class=" border border-lgreen rounded-md">
                                                                <div class="courser_img" style="background-image: url({{asset($item->course->cover)}});">
                                                                </div>
                                                                <div class="px-5 py-3 relative">
                                                                    <div class=" mt-2">
                                                                        <h2 class=" text-lg text-nblue font-bold">{{$item->course->name}}</h2>
                                                                    </div>
                                                                    <div class="mt-2 flex justify-between items-end">
                                                                        <div class=" flex items-center">
                                                                            <div class="mr-3">
                                                                                {{-- <img class=" w-14 h-14 rounded-full" src="{{asset($item->course->instructor->pp)}}" alt=""> --}}
                                                                                {{-- if user dont have picture --}}
                                                                                @if ($item->course->instructor->pp == null)
                                                                                    <img class=" w-14 h-14 rounded-full" src="{{asset('img/team03.png')}}" alt="{{$item->course->instructor->name}}">
                                                                                @else
                                                                                    <img class=" w-14 h-14 rounded-full" src="{{ asset($item->course->instructor->pp) }}" alt="{{$item->course->instructor->name}}">
                                                                                @endif
                                                                            </div>
                                                                            <div class="">
                                                                                <h2 class=" text-base text-nblue font-semibold">{{$item->course->instructor->name}}
                                                                                </h2>
                                                                                @if ($item->course->instructor->designation)
                                                                                <p class=" text-sm font-medium ">{{$item->course->instructor->designation}}</p>
                                                                                @else

                                                                                <p class=" text-sm font-medium ">Instructor</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <p class=" text-lg font-bold text-white bg-dgreen px-3 py-1 rounded-full"> {{number_format($item->course->current_price, 0) }} BDT</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="absolute top-4 right-0">
                                                                        @if ($item->course->status == '1')
                                                                        <p class="text-xs text-white bg-dorange px-2 py-1"> Pending</p>
                                                                        @elseif ($item->course->status == '2')
                                                                        <p class="text-xs text-white bg-dorange px-2 py-1"> On Review</p>
                                                                        @else

                                                                        <p class="text-xs text-white bg-dorange px-2 py-1"> Running</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </a>

                                                        @empty
                                                        <p>No Pending Enrollment</p>
                                                        @endforelse

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============instructor-dashboard-item end================ -->

</x-guest-layout>

