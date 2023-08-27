{{-- individual course --}}
<a href="{{route('courses.show', '1')}}">
<div class=" border border-lgreen rounded-md">
    <div class="courser_img"
        style=" background-image: url('{{asset('img/css.png')}}');">
    </div>
    <div class="px-5 py-3 course_info">
        <div class=" mt-2">
            <h2 class=" text-lg text-nblue font-bold">Wordpress
            </h2>
        </div>
        <div class="mt-2 flex justify-between items-end">
            <div class=" flex items-center">
                <div class="mr-3">
                    <img class=" w-14 h-14 rounded-full"
                        src="{{asset('img/team01.jpg')}}" alt="">
                </div>
                <div class="">
                    <h2
                        class=" text-base text-nblue font-semibold">
                        Jami J.
                        Morris
                    </h2>
                    <p class=" text-sm font-medium ">Web
                        Developer</p>
                </div>
            </div>
            <div class="">
                <p
                    class=" text-lg font-bold text-white bg-dgreen px-3 py-1 rounded-full">
                    1250
                    BDT</p>
            </div>
        </div>
        <div class=" course_level">
            <p
                class="text-base text-white bg-dorange px-2 py-1">
                Featured</p>
        </div>
    </div>
</div>
</a>
