<nav x-data="{ open: false }" class="bg-white border-b border-gray-100  print:hidden">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center" id="siteLogo">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600 " />
                </a>
            </div>
            <!-- Hamburger -->
            <div class="-mr-2 hidden sm:flex items-center rotate-180" id="sidemenutoggle">
                <button class="rotate-180 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" id="toggleIcon" width="1em" height="1em"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m15 4l-8 8l8 8" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="sidenav relative print:hidden">
    <x-sidenav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        <span class="iconify" data-icon="mingcute:dashboard-2-line"></span>
        <p class="sidelinktext">Dashboard</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('categories.index')" :active="request()->routeIs('categories.*')">
        <span class="iconify" data-icon="iconamoon:category-thin"></span>
        <p class="sidelinktext">Categories</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('courses.index')" :active="request()->routeIs('courses.*')">
        <span class="iconify" data-icon="material-symbols:play-lesson-outline"></span>
        <p class="sidelinktext">Courses</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('enrollments.index')" :active="request()->routeIs('enrollments.*')">
        <span class="iconify" data-icon="mdi:register-outline"></span>
        <p class="sidelinktext">Enrolllments</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('services.index')" :active="request()->routeIs('services.*')">
        <span class="iconify" data-icon="carbon:settings-services"></span>
        <p class="sidelinktext">Services</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('albums.index')" :active="request()->routeIs('albums.*')">
        <span class="iconify" data-icon="solar:gallery-linear"></span>
        <p class="sidelinktext">Gallery</p>
    </x-sidenav-link>


    <x-sidenav-link :href="route('subscribers.index')" :active="request()->routeIs('subscribers.*')">
        <span class="iconify" data-icon="mdi:user-details"></span></span>
        <p class="sidelinktext">Subscriber</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('quaries.all')" :active="request()->routeIs('quaries.*')">
        <span class="iconify" data-icon="carbon:query"></span></span>
        <p class="sidelinktext">Quaries</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('quotations.all')" :active="request()->routeIs('quotations.*')">
        <span class="iconify" data-icon="octicon:quote-16"></span></span>
        <p class="sidelinktext">Quotations</p>
    </x-sidenav-link>
    <hr class="border border-udark my-1">

    <x-sidenav-link :href="route('users.index')" :active="request()->routeIs('users.*')">
        <span class="iconify" data-icon="majesticons:user-line"></span>
        <p class="sidelinktext">Users</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('permissions.index')" :active="request()->routeIs('permissions.*')">
        <span class="iconify text-eve" data-icon="fluent:key-20-regular"></span>
        <p class="sidelinktext">Permissions</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('roles.index')" :active="request()->routeIs('roles.*')">
        <span class="iconify text-eve" data-icon="fluent:phone-key-24-regular"></span>
        <p class="sidelinktext">Roles</p>
    </x-sidenav-link>


    {{-- <hr class="border border-gray-400 dark:border-gray-600 my-1">
    <x-sidenav-link :href="route('products.index')" :active="request()->routeIs('products.*')">
        <span class="iconify" data-icon="mdi:package-variant-closed"></span>
        <p class="sidelinktext">Products</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('suppliers.index')" :active="request()->routeIs('suppliers.*')">
        <span class="iconify" data-icon="mdi:package-variant-closed-plus"></span>
        <p class="sidelinktext">Supplier</p>
    </x-sidenav-link>
    <x-sidenav-link :href="route('purchases.index')" :active="request()->routeIs('purchases.*')">
        <span class="iconify" data-icon="carbon:purchase"></span>
        <p class="sidelinktext">Purchases</p>
    </x-sidenav-link> --}}





    {{-- <hr class="border border-udark my-1"> --}}
</div>
