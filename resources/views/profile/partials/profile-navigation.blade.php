{{-- Profile navigation --}}
<div class="col-span-4">
    <div class=" p-6 border border-lgreen rounded-md">
        <div class="">
            <p class=" text-lg text-nblue font-semibold uppercase text-center md:text-left">WELCOME,
                {{$user->name}}</p>
        </div>
        <div class="mt-7">
            <div class="">
                <ul class="flex lg:block justify-around items-center">
                    <li class=" lg:border-b border-b-slate-400 sm:my-3 sm:pb-3">
                        <x-side-link :href="route('profile.dashboard')"  :active="request()->routeIs('profile.dashboard')">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="mingcute:home-3-line"></span>
                                <div class="hidden sm:flex">Dashboard</div>
                            </div>
                        </x-side-link>
                    </li>
                    <li class=" lg:border-b border-b-slate-400 sm:my-3 sm:pb-3">
                        <x-side-link :href="route('profile.index')"  :active="request()->routeIs('profile.index')">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="bxs:user"></span>
                                <div class="hidden sm:flex">My Profile</div>
                            </div>
                        </x-side-link>
                    </li>
                    @role('student')
                    <li class=" lg:border-b border-b-slate-400 sm:my-3 sm:pb-3">
                        <x-side-link :href="route('profile.ecources')"  :active="request()->routeIs('profile.ecources')">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="ion:book-outline"></span>
                                <div class="hidden sm:flex">Enrolled Courses</div>
                            </div>
                        </x-side-link>
                    </li>
                    @endrole
                    @role('instructor')
                    <li class="sm:my-3">
                        <x-side-link :href="route('profile.mycource')"  :active="request()->routeIs('profile.mycource')">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="icon-park-outline:new-computer"></span>
                                <div class="hidden sm:flex">My Courses</div>
                            </div>
                        </x-side-link>
                    </li>
                    @endrole
                    <h2 class=" text-base text-nblue lg:my-6 hidden sm:flex">USER</h2>
                    <li class=" lg:border-b border-b-slate-400 sm:my-3 sm:pb-3">
                        <x-side-link :href="route('profile.edit')"  :active="request()->routeIs('profile.edit')">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="solar:settings-bold"></span>
                                <div class="hidden sm:flex">Settings</div>
                            </div>
                        </x-side-link>
                    </li>
                    <li class=" sm:my-3 sm:pb-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class=" text-lg md:2xl lg:text-xl  text-nblue font-medium hover:text-dgreen" onclick="event.preventDefault(); this.closest('form').submit();">
                                <div class="flex items-center">
                                    <span class="iconify mr-2" data-icon="fe:logout"></span>
                                    <div class="hidden sm:flex">Log out</div>
                                </div>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
