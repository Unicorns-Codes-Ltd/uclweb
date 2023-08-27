<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('enrollments.index')" :active="request()->routeIs('enrollments.index')">
                {{ __('All Enrollments') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md">
            <h1 class="text-xl mb-4 text-center sm:text-left">Edit this enrollment</h1>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">

                <div class=" relative">
                    <div class="">
                        @if ($enrollment->status == '1')
                        <span  class="bg-red-500 rounded-full text-white text-sm px-2 inline-block py-1 ">Pending</span>
                        @else
                        <span  class="bg-uorange rounded-full text-white text-sm px-2 inline-block py-1 ">Approved</span>
                        @endif
                        <h2>Student Name: <span class="text-xl font-semibold">{{$enrollment->user->name}}</span></h2>
                        <p>Student Email: {{$enrollment->user->email}}</p>
                        <p>Total: <span class="text-xl font-semibold">{{$enrollment->total}} BDT</span></p>
                        <p>User bKash Number: <span class="font-semibold">{{$enrollment->bkash_number}}</span></p>
                        <p>bKash TrxID: <span class="font-semibold text-red-500">{{$enrollment->trxid}}</span></p>

                        @if($enrollment->status == '1')

                        <p class="mt-4">Please ensure that you recived <span class="font-semibold">{{$enrollment->total}} BDT</span>  form ({{$enrollment->bkash_number}}) this bKash number before approving. If you didnt recive the amount, please contact {{$enrollment->bkash_number}}.</p>
                        @else
                        <p class="mt-4"><span class="font-semibold">{{$enrollment->total}} BDT</span> recived form ({{$enrollment->bkash_number}}) this bKash number.</p>
                        @endif


                    </div>

                    @if($enrollment->status == '1')

                    <form method="POST" action="{{ route('enrollments.update', $enrollment->id) }}">
                        @csrf
                        @method('PATCH')

                        {{-- Status --}}
                        <div class="">
                            <x-input-label for="status" :value="__('Status')" />

                            <x-select-input id="status" name="status" required>
                                    <option value="1" class="capitalize" @if($enrollment->status == '1') @selected(true) @endif>Pending</option>
                                    <option value="2" class="capitalize" @if($enrollment->status == '2') @selected(true) @endif>Approved</option>
                            </x-select-input>
                        </div>

                        <div class="flex items-center justify-start mt-4">

                            <x-primary-button class="">
                                {{ __('Approve Enrollment') }}
                            </x-primary-button>
                        </div>
                    </form>
                    @endif

                </div>
                <div class="col-span-2">
                    <h2 class="text-xl font-semibold">Enrolled Courses</h2>
                    <hr>
                    <div class="grid grid-cols-1 sm:grid-cols-2 pt-2">
                        @foreach ($enrollment->enrollmentitems as $enrollmentitem)
                        {{-- individual course --}}
                        <div class=" border border-lgreen rounded-md">
                            <div class="bg-cover bg-center w-full h-[100px] rounded" style="background-image: url({{asset($enrollmentitem->course->cover)}});">
                            </div>
                            <div class="px-5 py-3 relative">
                                <div class=" mt-2">
                                    <a href="{{route('courses.show', $enrollmentitem->course->id)}}">
                                    <h2 class=" text-lg text-nblue font-bold">{{$enrollmentitem->course->name}}</h2>
                                    </a>
                                </div>
                                <div class="mt-2 flex justify-between items-end">
                                    <div class=" flex items-center">
                                        <div class="mr-3">
                                            <img class=" w-14 h-14 rounded-full" src="{{asset($enrollmentitem->course->instructor->pp)}}" alt="">
                                        </div>
                                        <div class="">
                                            <h2 class=" text-base text-nblue font-semibold">{{$enrollmentitem->course->instructor->name}}
                                            </h2>
                                            @if ($enrollmentitem->course->instructor->designation)
                                            <p class=" text-sm font-medium ">{{$enrollmentitem->course->instructor->designation}}</p>
                                            @else

                                            <p class=" text-sm font-medium ">Instructor</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class=" text-lg font-bold text-white bg-uorange px-3 py-1 rounded-full"> {{number_format($enrollmentitem->course->current_price, 0) }} BDT</p>
                                    </div>
                                </div>
                                <div class="absolute top-4 right-0">
                                    @if ($enrollmentitem->course->status == '1')
                                    <p class="text-xs text-white bg-dorange px-2 py-1"> Pending</p>
                                    @elseif ($enrollmentitem->course->status == '2')
                                    <p class="text-xs text-white bg-dorange px-2 py-1"> On Review</p>
                                    @else

                                    <p class="text-xs text-white bg-dorange px-2 py-1"> Running</p>
                                    @endif
                                </div>
                                <div class="mt-4">
                                    <p>Enrollment Status:
                                        @if ($enrollmentitem->status == '1')
                                        <span class="text-xs text-white bg-dorange px-2 py-1 rounded-full"> Pending</span>
                                        @else

                                        <span class="text-xs text-white bg-uorange px-2 py-1 rounded-full"> Approved</span>
                                        @endif
                                    </p>

                                    @if ($enrollmentitem->batch_id)
                                    <p>Enrolled Batch: {{ $enrollmentitem->batch->number}}  - Seat {{$enrollmentitem->batch->max_seat}}</p>
                                    @else

                                    <p>Enrolled Batch: Not assigned yet, Please assign.</p>

                                    <form action="{{route('enrollmentitems.update', $enrollmentitem->id)}}" method="post">
                                        @csrf
                                        @method('PATCH')

                                        {{-- Status --}}
                                        <div class="mt-2">
                                            <x-input-label for="status" :value="__('Batch*')" />
                                            <div class="flex">
                                                <x-select-input id="batch_id" name="batch_id" required>
                                                    @foreach ($enrollmentitem->course->batches as $item)

                                                    <option value="{{$item->id}}" class="capitalize">{{$item->number}} - Seat {{$item->max_seat}}</option>
                                                    @endforeach
                                                </x-select-input>
                                                <x-primary-button class="">
                                                    {{ __('Assign') }}
                                                </x-primary-button>
                                            </div>
                                        </div>
                                    </form>
                                    @endif
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>


    <x-slot name="script">
        <script>

        </script>
    </x-slot>
</x-app-layout>
