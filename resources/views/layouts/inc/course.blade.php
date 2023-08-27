{{-- individual course --}}
<a href="{{route('courses.details', $item->id)}}">
<div class=" border border-lgreen rounded-md hover:shadow-xl shadow-udark/50 hover:scale-105 transition duration-150 ease-in-out">
    <div class="courser_img flex justify-end items-end" style="background-image: url({{asset($item->cover)}});">
        <div class="mr-2 mb-2">
            <p class="inline-block text-lg font-bold text-white bg-udark/80 px-3 py-1 rounded-full"> {{number_format($item->current_price, 0) }} BDT</p>
        </div>
    </div>
    <div class="px-5 py-3 relative">
        <div class=" mt-2">
            <h2 class=" text-lg text-nblue font-bold">{{$item->name}}</h2>
        </div>
        <div class="mt-2 flex justify-between items-end flex-wrap gap-2">
            <div class=" flex items-center">
                <div class="mr-3">
                    {{-- <img class=" w-14 h-14 rounded-full" src="{{asset($item->instructor->pp)}}" alt=""> --}}
                    {{-- if user dont have picture --}}
                    @if ($item->instructor->pp == null)
                        <img class=" w-14 h-14 rounded-full" src="{{asset('img/team03.png')}}" alt="{{$item->instructor->name}}">
                    @else
                        <img class=" w-14 h-14 rounded-full" src="{{ asset($item->instructor->pp) }}" alt="{{$item->instructor->name}}">
                    @endif
                </div>
                <div class="">
                    <h2 class=" text-base text-nblue font-semibold">{{$item->instructor->name}}
                    </h2>
                    @if ($item->instructor->designation)
                    <p class=" text-sm font-medium ">{{$item->instructor->designation}}</p>
                    @else

                    <p class=" text-sm font-medium ">Instructor</p>
                    @endif
                </div>
            </div>

        </div>
        <div class="absolute top-4 right-0">
            @if ($item->status == '1')
            <p class="text-xs text-white bg-uorange px-2 py-1"> Pending</p>
            @elseif ($item->status == '2')
            <p class="text-xs text-white bg-uorange px-2 py-1"> On Review</p>
            @else

            <p class="text-xs text-white bg-uorange px-2 py-1"> Running</p>
            @endif
        </div>
    </div>
</div>
</a>
