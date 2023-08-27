<div class="  bg-lgreen hover:bg-nblue transition cursor-pointer text-white hover:text-white relative bg-cover bg-center bg-no-repeat rounded-md" style="background-image: url({{asset($service->cover)}})">
    <div class="w-full aspect-4/3 relative ">

        <div class="w-full absolute bottom-0 left-0 bg-udark/60 backdrop-blur-sm py-2 sm:py-9 px-2 sm:px-5 sm:flex items-center justify-between">
            <h2 class="text-sm sm:text-lg font-bold text-left  ">{{$service->title}}</h2>
            <a href="{{route('services.show',$service->id)}}">
                <button class="flex justify-center text-sm sm:text-base items-center gap-4 transition duration-150 ease-in-out border border-white rounded text-white px-2 sm:px-5 py-1 sm:py-2.5 mt-2 sm:mt-0 hover:bg-uorange hover:border-uorange ">Details <span class="iconify" data-icon="solar:upload-linear"></span></button>
            </a>
        </div>
    </div>
</div>
