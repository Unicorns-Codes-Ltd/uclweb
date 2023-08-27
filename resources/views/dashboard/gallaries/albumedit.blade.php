<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('albums.index')" :active="request()->routeIs('albums.index')">
                {{ __('All Album') }}
            </x-nav-link>
            <x-nav-link :href="route('albums.create')" :active="request()->routeIs('albums.create')">
                {{ __('Add Photo To Album') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-2 sm:p-6">
        <div class="p-2 sm:p-6 bg-white rounded-md">
            <h1 class="text-xl mb-1 text-uorange">Edit this Album</h1>

            <form method="POST" action="{{ route('albums.update', $album->id) }}" id="course-store" enctype="multipart/form-data" >
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-3 ">

                    <div class="col-span-2">
                        <!-- Name -->
                        <div class="">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                value="{{$album->name}}" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-primary-button class="ml-4" >
                            {{ __('Update Album') }}
                        </x-primary-button>
                    </div>
                </div>

            </form>
        </div>

    </div>

</x-app-layout>
