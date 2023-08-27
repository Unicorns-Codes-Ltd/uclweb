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
                                <h2 class=" text-xl text-nblue font-bold">My Courses</h2>
                            </div>
                            <div class="mt-5">
                                <div class="mb-4 border-b pb-1 lg:pb-0 lg:border-none border-b-nblue">
                                    <div class="tabs">
                                        <div class="tab_line">
                                            <div class=" ">
                                                <ul class="tabs-nav flex">
                                                    <li class="mr-10"><a class=" text-lg font-medium mt-4  leading-8"
                                                            href="#publish">Publish</a>
                                                    </li>
                                                    <li class="mr-10"><a class=" text-lg font-medium mt-4  leading-8"
                                                            href="#pending">Pending</a>
                                                    </li>

                                                </ul>
                                            </div>

                                        </div><!-- END seting_tabs-nav -->
                                        <div class="tabs-content">
                                            <div id="publish" class="tab-content">
                                                <div class="mt-6 lg:mt-10">
                                                    <div class="grid md:grid-cols-2 gap-10">
                                                        {{-- individual course --}}
                                                        @forelse ($mypucourses as $item)
                                                            @include('layouts.inc.course')
                                                        @empty
                                                        <p>No Published Courses</p>

                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="pending" class="tab-content">
                                                <div class="mt-6 lg:mt-10">
                                                    <div class="grid md:grid-cols-2 gap-10">
                                                        {{-- individual course --}}
                                                        @forelse ($mypecourses as $item)
                                                            @include('layouts.inc.course')
                                                        @empty
                                                        <p>No Pending Courses</p>

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



