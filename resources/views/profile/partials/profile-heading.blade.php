{{-- profile heading --}}
<div class="max-w-7xl mx-auto">
    <div class=" px-10 py-12 bg-nblue rounded-md">
        <div class=" lg:flex items-end justify-between">
            <div class="lg:flex items-center ">
                <div class="flex justify-center lg:justify-start">
                    {{-- if user dont have picture --}}
                    @if ($user->pp == null)
                        <img class=" w-24 h-24 rounded-full border-4 border-white" src="{{asset('img/team03.png')}}" alt="{{$user->name}}">
                    @else
                        <img class=" w-24 h-24 rounded-full border-4 border-white" src="{{ asset($user->pp) }}" alt="{{$user->name}}">
                    @endif
                </div>
                <div class="lg:ml-6">
                    <h2 class="text-lg md:text-xl font-bold text-white text-center lg:text-left">{{$user->name}}</h2>
                    <p class=" text-lg font-light text-white text-center lg:text-left">{{$user->designation}}</p>
                </div>
            </div>
            <div class=""></div>
            {{-- <div class=" flex justify-center lg:justify-end mt-2 md:mt-3 lg:mt-0">
                <a href="createnewcourse.html"
                    class=" text-sm md:text-lg text-nblue bg-white px-5 py-2 hover:bg-dgreen hover:text-white font-bold tracking-wider rounded-md">
                    CREATE A NEW COURSE </a>
            </div> --}}
        </div>
    </div>
</div>
