<nav class=" bg-white nav_area py-2.5 px-3 sm:px-0 fixed top-0 z-[1000] w-screen shadow-sm">
    <div class="max-w-7xl sm:px-4 xl:px-0 mx-auto grid grid-cols-2 sm:grid-cols-3 gap-5 content-center py-5 transition-all duration-150 ease-in-out" id="mainnavigation">


        {{-- Desktop navigation --}}
        <div class="hidden sm:flex justify-center items-center">
            <ul class="flex justify-center items-center gap-5 sm:gap-20 w-full">
                {{-- <li><a class=" text-lg font-bold text-uorange hover:text-udark" href="{{ route('home') }}">Home</a></li> --}}
                <li><a class=" text-lg font-normal text-udark hover:text-uorange" href="{{ route('about') }}">About</a></li>
                <li><a class=" text-lg font-normal text-udark hover:text-uorange" href="{{ route('service') }}">Service</a>
                </li>
                <li><a class=" text-lg font-normal text-udark hover:text-uorange" href="{{ route('cource') }}">Course</a>
                </li>

            </ul>
        </div>
        {{-- logo --}}
        <div class=" flex items-center sm:justify-center">
            <a href="{{ route('home') }}">
                <x-application-logo class="block h-20 w-auto fill-current text-udark" />
            </a>
        </div>
        <div class="hidden sm:flex justify-center items-center">
            <ul class="flex justify-center items-center gap-5 sm:gap-20 w-full">
                <li><a class=" text-lg font-normal text-udark hover:text-uorange" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li><a class=" text-lg font-normal text-udark hover:text-uorange" href="{{ route('contact') }}">Contact</a>
                </li>
                <li>
                    {{-- Authintication --}}
                    <div class="flex justify-end items-center">
                        @auth
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Notification Dropdown -->
                            <div class="flex items-center sm:ml-6 mr-2 text-left">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="relative flex items-center text-sm font-medium transition duration-150 ease-in-out text-nblue">
                                            <span class="iconify text-2xl font-medium text-nblue hover:text-dgreen transition duration-150 ease-in-out" data-icon="solar:bell-bold"></span>

                                            @if ($notifications->count() > 0)
                                                <div class="w-2 h-2 bg-red-600 rounded full animate-ping absolute top-0 right-0 tablinedot">
                                                </div>
                                            @endif
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <div id="notificationdiv" class="p-2">
                                            @if ($notifications != null)
                                                @forelse ($notifications as $notification)
                                                <div class="flex gap-4 items-center alert my-2">
                                                    <a href="{{route($notification->data['route'], $notification->data['model_id'])}}" class="flex-grow mark-as-read" data-id="{{$notification->id}}">
                                                        <p class="bg-dgreen/20 rounded px-5 py-2 text-dblue ">{{ $notification->data['message'] }}</p>
                                                    </a>
                                                </div>

                                                @if ($loop->last)
                                                <div class="mt-10">

                                                    <a href="#" class="text-dgreen rounded mt-10 underline cursor-pointer" id="mark-all">Mark all as read</a>
                                                </div>
                                                @endif
                                                @empty
                                                <div class="py-10 text-center">
                                                        <p class=" text-dgreen ">No Notification.</p>
                                                </div>
                                                @endforelse
                                            @endif
                                        </div>

                                    </x-slot>
                                </x-dropdown>
                            </div>

                            <!-- Auth Dropdown -->
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <span class="iconify text-2xl font-medium text-nblue hover:text-dgreen transition duration-150 ease-in-out" data-icon="mingcute:user-3-fill"></span>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.dashboard')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    @role('admin')
                                    <x-dropdown-link :href="route('dashboard')">
                                        {{ __('Dashboard') }}
                                    </x-dropdown-link>
                                    @endrole
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>

                                </x-slot>
                            </x-dropdown>

                            {{-- Cart --}}
                            <a href="{{route('carts.index')}}">
                                <div class="relative">

                                    <span class="iconify text-2xl font-medium text-udark hover:text-uorange transition duration-150 ease-in-out ml-2" data-icon="fluent:cart-24-filled"></span>
                                    @if ($cartcount  > 0)
                                        <div class="absolute text-xs w-4 h-4 bg-uorange rounded-full text-white flex justify-center items-center p-1 top-0 left-6">{{$cartcount}}</div>
                                    @endif
                                </div>
                            </a>

                        </div>
                        @else
                            @if (Route::has('login'))
                                <a class=" text-lg font-normal text-udark hover:text-uorange" href="{{ route('login') }}">Sign in</a>
                            @endif
                        @endauth
                    </div>
                </li>
            </ul>
        </div>
        {{-- Desktop navigation end --}}

        {{-- Mobile dropdown --}}
        <div class="flex items-center justify-end sm:hidden">
            @auth
                <!-- Notification Dropdown -->
                <div class="flex items-center sm:ml-6 mr-2 text-left">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="relative flex items-center text-sm font-medium transition duration-150 ease-in-out text-nblue">
                                <span class="iconify text-2xl font-medium text-nblue hover:text-dgreen transition duration-150 ease-in-out" data-icon="solar:bell-bold"></span>

                                @if ($notifications->count() > 0)
                                    <div class="w-2 h-2 bg-red-600 rounded full animate-ping absolute top-0 right-0 tablinedot">
                                    </div>
                                @endif
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div id="notificationdiv" class="p-2">
                                @if ($notifications != null)
                                    @forelse ($notifications as $notification)
                                    <div class="flex gap-4 items-center alert my-2">
                                        <a href="{{route($notification->data['route'], $notification->data['model_id'])}}" class="flex-grow mark-as-read" data-id="{{$notification->id}}">
                                            <p class="bg-dgreen/20 rounded px-5 py-2 text-dblue ">{{ $notification->data['message'] }}</p>
                                        </a>
                                    </div>

                                    @if ($loop->last)
                                    <div class="mt-10">

                                        <a href="#" class="text-dgreen rounded mt-10 underline cursor-pointer" id="mark-all">Mark all as read</a>
                                    </div>
                                    @endif
                                    @empty
                                    <div class="py-10 text-center">
                                            <p class=" text-dgreen ">No Notification.</p>
                                    </div>
                                    @endforelse
                                @endif
                            </div>

                        </x-slot>
                    </x-dropdown>
                </div>
                {{-- Cart --}}
                <a href="{{route('carts.index')}}">
                    <div class="relative">

                        <span class="iconify text-2xl font-medium text-udark hover:text-uorange transition duration-150 ease-in-out ml-2" data-icon="fluent:cart-24-filled"></span>
                        @if ($cartcount  > 0)
                            <div class="absolute text-xs w-4 h-4 bg-dorange rounded-full text-white flex justify-center items-center p-1 top-0 left-6">{{$cartcount}}</div>
                        @endif
                    </div>
                </a>
            @endauth
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <span class="iconify text-2xl font-medium text-udark"
                        data-icon="iconamoon:menu-burger-horizontal-bold"></span>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('home')"> {{ __('Home') }} </x-dropdown-link>
                    <x-dropdown-link :href="route('about')"> {{ __('About') }} </x-dropdown-link>
                    <x-dropdown-link :href="route('service')"> {{ __('Service') }} </x-dropdown-link>
                    <x-dropdown-link :href="route('cource')"> {{ __('Cource') }} </x-dropdown-link>
                    <x-dropdown-link :href="route('gallery')"> {{ __('Gallery') }} </x-dropdown-link>
                    <x-dropdown-link :href="route('contact')"> {{ __('Contact') }} </x-dropdown-link>

                    @auth
                        <x-dropdown-link :href="route('profile.dashboard')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('dashboard')">
                            {{ __('Dashboard') }}
                        </x-dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    @endauth
                </x-slot>
            </x-dropdown>

        </div>
    </div>
</nav>
<!-- ==================Nav-bar-end==================== -->
